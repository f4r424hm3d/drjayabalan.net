<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.treatments');
  }
}
