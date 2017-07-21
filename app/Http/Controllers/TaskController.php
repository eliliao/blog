<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function index()
    {
      $name = 'eli';
      $age = 27;

      $tasks = Task::get();

      return view('welcome',compact('name','age','tasks'));

    }
    public function show($id)
    {
        return Task::find($id);
    }

}
