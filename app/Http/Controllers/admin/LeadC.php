<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadC extends Controller
{
  public function index(Request $request)
  {
    $limit_per_page = $request['lpp'] ?? '10';
    if ($request->segment(3) == '') {
      $clt = 'new';
    } else {
      $clt = $request->segment(3);
    }

    $rows = Lead::orderBy('id', 'desc');

    if ($request->has('nationality') && $request->nationality != '') {
      $rows = $rows->where('nationality', $request->nationality);
    }
    if ($request->has('level') && $request->level != '') {
      $rows = $rows->where('current_qualification_level', $request->level);
    }
    if ($request->has('course') && $request->course != '') {
      $rows = $rows->where('intrested_course_category', $request->course);
    }
    if ($request->has('asign') && $request->asign != '') {
      $rows = $rows->whereHas('getAC', function ($query) use ($request) {
        $query->where('user_id', $request->asign);
      });
    }
    if ($request->has('from') && $request->from != '') {
      $from = date('Y-m-d', strtotime($request->from . '-1 days'));
      $rows = $rows->whereDate('created_at', '>', $from);
    }
    if ($request->has('to') && $request->to != '') {
      $to = date('Y-m-d', strtotime($request->to . '+1 days'));
      $rows = $rows->whereDate('created_at', '<', $to);
    }
    if ($request->has('lead_status') && $request->lead_status != '') {
      $rows = $rows->where('lead_status', $request->lead_status);
    }
    if ($request->has('lead_sub_status') && $request->lead_sub_status != '') {
      $rows = $rows->where('lead_sub_status', $request->lead_sub_status);
    }

    $rows = $rows->paginate($limit_per_page)->withQueryString();

    $cp = $rows->currentPage();
    $pp = $rows->perPage();
    $i = ($cp - 1) * $pp + 1;

    // printArray($rows->toArray());
    // die;

    $page_title = 'Leads';
    $data = compact('rows', 'page_title', 'limit_per_page', 'i');
    return view('admin.leads')->with($data);
  }
  public function add($id = null)
  {
    $ft = 'add';
    $url = url('admin/client/store');
    $title = 'Add New';
    $sd = '';
    $page_title = 'Add Lead';
    $page_route = 'client/add';
    $data = compact('sd', 'ft', 'url', 'title', 'page_title', 'page_route', 'country', 'levels', 'cc');
    return view('admin.add-leads')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required',
        'email' => 'required|unique:clients,email',
        'mobile' => 'required|unique:clients,mobile',
      ]
    );
    $field = new Lead;
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->status = 1;
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/client/add');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Lead::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'email' => 'required|unique:client,email,' . $id,
        'mobile' => 'required|unique:client,mobile,' . $id,
      ]
    );
    $field = Lead::find($id);
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/client/add');
  }
  public function getQuickInfo(Request $request)
  {
    if ($request->id) {
      $id = $request->id;
      $student = Lead::find($request->id);

      $output = '<div class="form-group col-md-12">
			<label>Name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="' . $student->name . '">
		</div>
		<div class="form-group col-md-12">
			<label>Email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="' . $student->email . '">
		</div>
    <div class="form-group col-md-12">
        <label>Mobile</label>
        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile" value="' . $student->mobile . '">
    </div>';

      echo $output;
    }
  }
  public function updateQuickInfo(Request $request)
  {
    //return "Hello";
    // $request->validate(
    //   [
    //     'name' => 'required',
    //     'email' => 'required|unique:client,email,' . $request['id'],
    //     'mobile' => 'required|unique:client,mobile,' . $request['id'],
    //   ]
    // );
    $field = Lead::find($request['id']);
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $done = $field->save();
    if ($done) {
      return "success";
    } else {
      return "failed";
    }
    //session()->flash('smsg', 'Record has been updated successfully.');
    //return redirect('admin/client/');
  }
  public function fetchLastRecord($id)
  {
    $student = Lead::find($id);
    $output = '<i class="fas fa-user text-danger"></i> : ' . $student->name . '
      <br><i class="fas fa-mobile text-danger"></i> : ' . $student->email . '
      <br><i class="fas fa-mail-bulk text-danger"></i> : ' . $student->mobile . '';
    echo $output;
  }
  public function add2()
  {
    $ft = 'add';
    $title = 'Add New';
    $sd = '';
    $page_title = 'Add Lead';
    $page_route = 'leads/add2';
    $data = compact('sd', 'ft', 'title', 'page_title', 'page_route');
    return view('admin.add-leads2')->with($data);
  }
  public function storeAjax(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required',
      'mobile' => 'required',
    ]);

    if ($validator->fails()) {

      return response()->json([
        'error' => $validator->errors(),
      ]);
    }

    $field = new Lead;
    $field->name = $request->name;
    $field->email = $request->email;
    $field->mobile = $request->mobile;
    $field->save();

    return response()->json(['success' => 'Product created successfully.']);
  }
}
