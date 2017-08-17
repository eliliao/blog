<!doctype html>
<html>

<head>

  <!-- Boostrap minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- fontawesome minified CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Stream Workshop</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/category">目錄功能 <span class="sr-only">(current)</span></a></li>
          <li><a href="/category">檢索頁面</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="https://scontent.ftpe8-3.fna.fbcdn.net/v/t1.0-9/310161_312243918791479_516709523_n.jpg?oh=86235d5a1cabe59a57cffa3f27421d91&oe=5A29650C" style="height:  20px;width: 20px" class="img-circle">
            Eli <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container">
    <h1 class='page-header'> 目錄 </h1>
    <p></p>

    <a href="/category/create" class="btn btn-danger">
      <i class="glyphicon glyphicon-plus"></i> 新增目錄
    </a>   {{-- 7/27上課新增 --}}
    {{-- 套boostrap css的方法很簡單
     <a href="/category/create" class="btn btn-danger">
       新增ㄧ件家事
     </a>
     --}}

    <br>
    <br>


    <table>
      <thead>
        <tr>
          <th class="fa fa-pencil" style="text-align:left">書名</th>
          &nbsp;&nbsp;
          <th class="fa fa-pencil" style="text-align:left">名稱</th>
          &nbsp;&nbsp;
          <th class="fa fa-pencil" style="text-align:left">操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category as $category_object)
          <tr>
            <td>{{ $category_object->id }}</td>
            <td>
              <a href="/category/{{ $category_object->id }}">
                     {{ $category_object->name }}
                </a>
            </td>
            <td>
              &nbsp;&nbsp;
              <form method="POST" action="/category/{{ $category_object->id }}">
                {{ csrf_field() }}  {{-- 安全機制 token碼 防止來自外部的表單送資料進來--}}
                {{-- 因為html只支援GET&POST,所以要用另外的input帶上PUT --}}
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                {{ method_field('delete') }}

                <button type="submit" class="btn btn-danger">
                  <a href="/category/{{ $category_object->id }}/edit">
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
        @foreach ($category as $category_object)

          <li></li>

        @endforeach
      </ul>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  </body>
</html>
