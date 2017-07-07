<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$name = 'eli';
    	$age = 20;
    	$tasks = [
    	    '唱歌',
    	    '喝酒',
    	    '吃飯',
    	];
    	return view('welcome', compact('name' , 'age' , 'tasks'));
    }
}
