<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class ContactFc extends Controller
{
  public function index(Request $request)
  {
    $treatments = Treatment::all();
    $data = compact('treatments');
    return view('front.contact-us')->with($data);
  }
  public function thankYou(Request $request)
  {
    return view('front.thank-you');
  }
}
