<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{ 
  public function getHome(){
    return view('site.home.index');
  }
}
