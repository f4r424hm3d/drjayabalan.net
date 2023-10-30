<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeFc extends Controller
{
  public function index(Request $request)
  {
    $blogs = Blog::limit(3)->inRandomOrder()->get();
    $testimonials = Testimonial::limit(10)->inRandomOrder()->get();
    $data = compact('blogs','testimonials');
    return view('front.index')->with($data);
  }
}
