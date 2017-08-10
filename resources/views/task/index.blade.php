<!doctype html>
<html>

<head>

  <!-- Boostrap minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- fontawesome minified CSS --> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
</body>

<div class="container">
<h1> Hello, {{ $name }} </h1>
<p> Your age is : <?php echo $age;?> </p>

<a href="/task/create" class="btn btn-danger">
 <i class="glyphicon glyphicon-plus"></i> 新增ㄧ件家事
</a>   {{-- 7/27上課新增 --}}
{{-- 套boostrap css的方法很簡單
 <a href="/task/create" class="btn btn-danger">
   新增ㄧ件家事
 </a>  
 --}}

<br>
<br>

要做的家事:
<table>
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
            &nbsp;&nbsp;
            <form method="POST" action="/task/{{ $task_object->id }}">  
              {{ csrf_field() }}  {{-- 安全機制 token碼 防止來自外部的表單送資料進來--}}
              {{-- 因為html只支援GET&POST,所以要用另外的input帶上PUT --}}
              {{-- <input type="hidden" name="_method" value="PUT"> --}}
              {{ method_field('delete') }}
              
              <button type="submit" class="btn btn-danger">
                <a href="/task/{{ $task_object->id }}/edit">
                  <i class="fa fa-pencil"></i>修改  
                </a>
              </button>
              <button type="submit" class="btn btn-danger">
                 <i class="fa fa-pencil"></i>刪除
              </button>
  {{--         這是之前的寫法 改button才能用class
               <input type="submit" value="刪除"> --}}
            </form>
          </td>
        </tr>   

    @endforeach

    </tbody>
            
<ul>
    @foreach ($tasks as $task_object)

        <li>     
        </li>

   @endforeach
</ul>
</div>

</html>
