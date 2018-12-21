<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
  public function index(){
    return view('home');
  }
   
}
