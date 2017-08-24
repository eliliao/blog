<html>
<head>
 @include('partial.head')
<title></title>

</head>
<body>
@include('task.navbar')
<div class="container">
  	 <h1 class='page-header'>新增家事表單</h1>
  		<form method="POST" action="/task" >  
			{{ csrf_field() }}  {{-- 安全機制 token碼 --}}

			<h4>名稱：</h4>
			<input type="text" name="name" class="form-control">
		
			<h4>敘述:</h4>
			<input type="text" name="description" class="form-control">
			<br>
			<br>
			<input class="btn btn-primary" type="submit" value="送出">
	</form>
   
    <br>
    <br>
@include('partial.scripts')
</body>

</html>