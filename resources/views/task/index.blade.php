@extends('layout')
@section('content')

<style>
 .table-middle > tbody > tr > td {
  vertical-align: middle;
 }

 .table-middle > tbody > tr > td > form {
  vertical-align: middle;
  margin: 5px;
 }
</style>

<div class="container">
    <h1 class='page-header'> 家事管理,</h1>
    <p></p>
<br>
<div class="row">
  </div>
  <div class="col-xs-8">
    <a href="/task/create" class="btn btn-danger btn-block">
      <i class="glyphicon glyphicon-plus"></i> 新增ㄧ件家事
    </a>   {{-- 7/27上課新增 --}}
    {{-- 套boostrap css的方法很簡單
     <a href="/task/create" class="btn btn-danger">
       新增ㄧ件家事
     </a>
     --}}
  </div>
  <div class="col-xs-4">
    <form class="input-group" method="GET" action="/task">
      <input type="text" class="form-control" placeholder="請輸入家事名稱" name="keyword" value={{$keyword}}>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="fa fa-search fa-tw"></i>
        </button>
      </span>
    </form><!-- /input-group -->  
  </div>

<br><br><br><br>

    <table class="table table-bordered table-middle">
      <thead>
        <tr>
          <th style="text-align:left">ID</th>
          <th style="text-align:left">名稱</th>
          <th style="text-align:left">操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task_object)
          <tr>
            <td>{{ $task_object->id }}</td>
            <td>
              <a href="/task/{{ $task_object->id }}">
                     {{ $task_object->name }}
                </a>
            </td>
            <td>
              <form method="POST" action="/task/{{ $task_object->id }}">  
                {{ csrf_field() }}  {{-- 安全機制 token碼 防止來自外部的表單送資料進來--}}
                {{-- 因為html只支援GET&POST,所以要用另外的input帶上PUT --}}
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                {{ method_field('delete') }}
                
                  <a href="/task/{{ $task_object->id }}/edit" class="btn btn-warning">
                    <i class="fa fa-pencil"></i>修改  
                  </a>
                <button type="submit" class="btn btn-danger">
                   <i class="fa fa-pencil"></i>刪除
                </button>
                {{--這是之前的寫法 改button才能用class
                <input type="submit" value="刪除"> --}}
              </form>
            </td>
          </tr>   

        @endforeach

      </tbody>    
    </div>

@endsection