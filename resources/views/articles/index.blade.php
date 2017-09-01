<!doctype html>
<html>

  <style>
    .table-middle > tbody > tr > td {
      vertical-align: middle;
  }

    .table-middle > tbody > tr > td > form {
      vertical-align: middle;
  }

</style>
    <head>
      @include('articles.head')
    </head>
      <meta charset="utf-8">
        <title> Eli workshop </title>
      <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js">
      </script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
</head>
    <body>
      @include('articles.navbar')
        <div class="container">
          <h1 class='page-header'> 文章管理系統 </h1>
          <p></p>

          <div class="row">
            <div class="col-xs-7">
              <a href="/articles/create" class="btn btn-danger btn-block">
                <i class="glyphicon glyphicon-plus"></i> 新增一篇文章
              </a>   
          {{-- 7/27上課新增 --}}
          {{-- 套boostrap css的方法很簡單
          <a href="/task/create" class="btn btn-danger">
          新增ㄧ件家事
          </a>  
          --}}    
          </div>
        <div class="col-xs-5">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <a href="/articles/create">
                <button class="btn btn-default" type="button">Go!</button>
              </a>
            </span>
          
          </div><!-- /input-group -->  
        </div>
      </div>

    <table class="table table-bordered table-middle">

      <thead>
         <tr>
            <th style="text-align:left">ID</th>
            <th style="text-align:left">名稱</th>
            <th style="text-align:left">操作</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($articles as $articles_object)
         <tr>
            <td>{{ $articles_object->id }}</td>
                 <td>
                    <a href="/articles/{{ $articles_object->id }}">
                    {{ $articles_object->name }}
                    </a>
                  </td>
                  <td>
                    <form method="POST" action="/articles/{{ $articles_object->id }}">
                      {{ csrf_field() }}  {{-- 安全機制 token碼  防止來自外部的表單送資料進來--}}
                      {{-- 因為html只支援GET&POST,所以要用另外的input帶上PUT --}}
                      {{-- <input type="hidden" name="_method" value="PUT"> --}}
                      {{ method_field('delete') }}
                    <a href="/articles/{{ $articles_object->id }}/edit" class="btn btn-primary">
                      <i class="fa fa-pencil"></i>修改選項
                    </a>
            <button type="submit" class="btn btn-primary">
             <i class="fa fa-pencil"></i>刪除選項
           </button>
    {{--         這是之前的寫法 改button才能用class
    <input type="submit" value="刪除"> --}}
               </form>
            </td>
        </tr>
          @endforeach
        </tbody>
        <ul>
          @foreach ($articles as $articles_object)
            <li></li>
          @endforeach
        </ul>
    </table>
</div>
@include('articles.scripts')
</body>
</html>


