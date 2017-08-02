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

      return view('task.index',compact('name','age','tasks'));

    }

    public function create()
    {

      return view('task.create');
      //回傳view ：task/create.blade.php，不帶入任何變數
    }

    public function store()
    {

        Task::create([
        // 在task table 新增一筆資料
            'name' => request()->input('name'),
            // name的欄位,要使用 form裡面的name輸入框的值
            'description' => request()->input('description') 
            // description 的欄位,要使用 form裡面的description輸入框的值 
        ]);
        return redirect()->to('/task');
        //回到tasks列表頁面


    }

    public function edit($id) //接收從routes/web.php 設定的 id 
    {
      $task = task::find($id); 
      // 建立一個變數 task,值是到tasks table抓回該id的資料
      return view('task.edit')->with(compact('task'));//回傳view : task/edit.blade.php,並帶入task變數
    }

    public function update($id)
    {
      $task = Task::find($id);
      //建立一個變數task,值是到task table 抓回該id的資料
      $task->update([
      //把該筆資料的欄位,更新成表單的資料,並寫入到tasks table 
        'name'=> request()->input('name'),
        //DB name的欄位,要使用form傳送到form裡面的name輸入框的值
        
        'description' => request()->input('description')
        //description 的欄位,要使用form裡面的description輸入框的值
      ]);

      return redirect()->to('/task');
      // 回到tasks列表頁面
    }

    public function show($id)
    {
    	$task = task::find($id); //接收從routes/web.php 設定的 id

      return view('task.show')->with(compact('task'));
    } 

}
