<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.gallery');
  }
}
