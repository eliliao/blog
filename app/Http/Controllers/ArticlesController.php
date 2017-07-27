<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function index()
    {
      $name = 'eli';               //捏造一個變數 name
      $age = 27;                   //捏造一個變數 age
      $articles = Articles::get(); 
      //建立一個變數Articles,值是從資料庫的Articles table撈回articles table的所有資料,作為變數articles的值

      return view('welcome',compact('name','age','articles'));
      // 回傳view : task/index.blade.php，並帶回以上的變數們
    }
    public function show($id) //接收從route/web.php 設定的id
    {
    	$articles = articles::find($id); 
      //建立一個變數,值是到 articles table 抓回該id的資料

        return view('articles.show')->with(compact('articles'));
        //回傳view : task/show.blade.php,並帶回articles變數
    }

}
