<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.blog');
  }
}