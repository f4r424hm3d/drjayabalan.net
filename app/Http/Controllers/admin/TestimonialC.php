<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialC extends Controller
{
  public function index($id = null)
  {
    $rows = Testimonial::get();
    if ($id != null) {
      $sd = Testimonial::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/testimonials/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/testimonials');
      }
    } else {
      $ft = 'add';
      $url = url('admin/testimonials/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = "Testimonials";
    $page_route = "testimonials";
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'page_route');
    return view('admin.testimonials')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required',
        'designation' => 'required',
        'image' => 'nullable|max:5000|mimes:jpg,jpeg,png,gif',
        'review' => 'required',
      ]
    );
    $field = new Testimonial;
    if ($request->hasFile('image')) {
      $fileOriginalName = $request->file('image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('image')->move('uploads/testimonial/', $file_name);
      if ($move) {
        $field->image_name = $file_name;
        $field->image_path = 'uploads/testimonial/' . $file_name;
      } else {
        session()->flash('emsg', 'Some problem occured. File not uploaded.');
      }
    }
    $field->name = $request['name'];
    $field->designation = $request['designation'];
    $field->review = $request['review'];
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/testimonials');
  }
  public function delete($id)
  {
    //echo $id;
    //echo $result = Testimonial::find($id)->delete();
    if ($id) {
      $row = Testimonial::findOrFail($id);
      if ($row->image_path != null) {
        unlink($row->image_path);
      }
      $row->delete();
      return response()->json(['success' => 'Record hase been deleted successfully.']);
    }else{
      return response()->json(['failed' => 'Some problem occured.']);
    }
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'designation' => 'required',
        'image' => 'nullable|max:5000|mimes:jpg,jpeg,png,gif',
        'review' => 'required',
      ]
    );
    $field = Testimonial::find($id);
    if ($request->hasFile('image')) {
      if ($field->image_path != null) {
        unlink($field->image_path);
      }
      $fileOriginalName = $request->file('image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('image')->move('uploads/testimonial/', $file_name);
      if ($move) {
        $field->image_name = $file_name;
        $field->image_path = 'uploads/testimonial/' . $file_name;
      } else {
        session()->flash('emsg', 'Some problem occured. File not uploaded.');
      }
    }
    $field->name = $request['name'];
    $field->designation = $request['designation'];
    $field->review = $request['review'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/testimonials');
  }
}
