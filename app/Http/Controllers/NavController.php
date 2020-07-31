<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\APIkey;

class NavController extends Controller
{
  public function home(){
    return view('home');
  }
  public function about(){
    return view('about');
  }
  public function prevention(){
    return view('prevention');
  }
  public function products(){
    return view('products');
  }
  public function news(){
    return view('news');
  }
  public function pages(){
    return view('pages');
  }
  public function contact(){
    return view('contact');
  }
  public function mon_compte(){
    return view('mon_compte');
  }
  public function api(){
    return view('api');
  }
}
