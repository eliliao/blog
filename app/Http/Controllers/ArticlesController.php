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

      return view('articles.index',compact('name','age','articles'));

    }

    public function create()
    {

      return view('articles.create');
      //回傳view ：articles/create.blade.php，不帶入任何變數
    }

    public function store()
    {

        Articles::create([
        // 在articles table 新增一筆資料
            'name' => request()->input('name'),
            // name的欄位,要使用 form裡面的name輸入框的值
            'description' => request()->input('description') 
            // description 的欄位,要使用 form裡面的description輸入框的值 
        ]);
        return redirect()->to('/articles');
        //回到articles列表頁面


    }

    public function edit($id) //接收從routes/web.php 設定的 id 
    {
      $articles = articles::find($id); 
      // 建立一個變數 articles,值是到articles table抓回該id的資料
      return view('articles.edit')->with(compact('articles'));//回傳view : /edit.blade.php,並帶入articles變數
    }

    public function update($id)
    {
      $articles = Articles::find($id);
      //建立一個變數Articles,值是到articles table 抓回該id的資料
      $articles->update([
      //把該筆資料的欄位,更新成表單的資料,並寫入到articles table 
        'name'=> request()->input('name'),
        //DB name的欄位,要使用form傳送到form裡面的name輸入框的值
        
        'description' => request()->input('description')
        //description 的欄位,要使用form裡面的description輸入框的值
      ]);

      return redirect()->to('/articles');
      // 回到articles列表頁面
    }

    public function show($id)
    {
      $articles = Articles::find($id); //接收從routes/web.php 設定的 id

      return view('articles.show')->with(compact('articles'));
    } 

}
