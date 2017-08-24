<html>
<head>
 @include('task.head')
<title></title>
  <!-- Boostrap minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
@include('task.scripts')
</body>

</html>