<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
      $name = 'eli';
      $age = 27;

      $category = Category::get();

      return view('category.index',compact('name','age','category'));

    }

    public function create()
    {

      return view('category.create');
      //回傳view ：articles/create.blade.php，不帶入任何變數
    }

    public function store()
    {

        Category::create([
        // 在articles table 新增一筆資料
            'name' => request()->input('name'),
            // name的欄位,要使用 form裡面的name輸入框的值
            'description' => request()->input('description')
            // description 的欄位,要使用 form裡面的description輸入框的值
        ]);
        return redirect()->to('/category');
        //回到articles列表頁面


    }

    public function edit($id) //接收從routes/web.php 設定的 id
    {
      $category = Category::find($id);
      // 建立一個變數 articles,值是到articles table抓回該id的資料
      return view('category.edit')->with(compact('category'));//回傳view : /edit.blade.php,並帶入articles變數
    }

    public function update($id)
    {
      $category = Category::find($id);
      //建立一個變數Articles,值是到articles table 抓回該id的資料
      $category->update([
      //把該筆資料的欄位,更新成表單的資料,並寫入到articles table
        'name'=> request()->input('name'),
        //DB name的欄位,要使用form傳送到form裡面的name輸入框的值

        'description' => request()->input('description')
        //description 的欄位,要使用form裡面的description輸入框的值
      ]);

      return redirect()->to('/category');
      // 回到articles列表頁面
    }

    public function show($id)
    {
      $category = Category::find($id); //接收從routes/web.php 設定的 id

      return view('category.show')->with(compact('category'));
    }

       public function destroy($id)
    {
      //建立一個變數task,值是到task table 抓回該id的資料

    $category = Category::find($id);
      //刪除該筆資料

    $category->delete();
      //把該筆資料的欄位,更新成表單的資料,並寫入到tasks table

    return redirect()->to('/category');
      // 回到tasks列表頁面

    }

}
