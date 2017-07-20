<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
      $name = 'eli';
      $age = 27;

      $tasks = \DB::table('tasks')->get();

     // dd($tasks)

    return view('welcome',compact('name','age','tasks'));

    }
}
