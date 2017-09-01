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
      
      //搜尋：用變數$keyword,來接收我們輸入的關鍵字
      $keyword = request()->input('keyword');

      if ($keyword == '') {
        //如果keyword的值是空的字串,就不篩選
        $tasks = Task::get();
      } else { //不是的話就
        //從task table中,找出name欄位值為$keyword的資料
        // $tasks = Task::where('name', $keyword)->get();
        $tasks = Task::where('name', 'like', '%'.$keyword.'%')->get();
        //要做模糊篩選的話要這樣寫 寫完整的where code
      }

      return view('task.index', compact('name','age','tasks','keyword'));

    }


    public function create()
    {

      return view('task.create');
      //回傳view ：task/create.blade.php，不帶入任何變數
    }

    public function store()
    {

        // Task::create([
        // // 在task table 新增一筆資料
        //     'name' => request()->input('name'),
        //     // name的欄位,要使用 form裡面的name輸入框的值
        //     'description' => request()->input('description') 
        //     // description 的欄位,要使用 form裡面的description輸入框的值 
        // ]);
        Task::create(request()->input());
        //上面是簡化的寫法，功能是接收表單傳送的所有資料，並在tasks table新增一筆資料
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
      // //建立一個變數task,值是到task table 抓回該id的資料
      // $task->update([
      // //把該筆資料的欄位,更新成表單的資料,並寫入到tasks table 
      //   'name'=> request()->input('name'),
      //   //DB name的欄位,要使用form傳送到form裡面的name輸入框的值
        
      //   'description' => request()->input('description')
      //   //description 的欄位,要使用form裡面的description輸入框的值
      // ]);
      Task::update(request()->input());//簡化方式 功能同上

      return redirect()->to('/task');
      // 回到tasks列表頁面
    }

    public function show($id)
    {
    	$task = Task::find($id); //接收從routes/web.php 設定的 id

      return view('task.show')->with(compact('task'));
    } 


   public function destroy($id)
    {
    //   //建立一個變數task,值是到task table 抓回該id的資料
    
    // $task = Task::find($id);
    //   //刪除該筆資料

    // $task->delete();
    //   //把該筆資料的欄位,更新成表單的資料,並寫入到tasks table 

    Task::destory($id); // 這是簡化方式, 根據ID刪除該筆資料

    return redirect()->to('/task');
      // 回到tasks列表頁面



    }




}
