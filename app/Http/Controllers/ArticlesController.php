<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function index()
    {
      $name = 'eli';
      $age = 27;

      $articles = Articles::get();

      return view('welcome',compact('name','age','articles'));

    }
    public function show($id)
    {
    	$articles = articles::find($id);

        return view('articles.show')->with(compact('articles'));
    }

}
