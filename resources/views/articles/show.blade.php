<h1>新增家事表單</h1>

<form method="POST" action="/articles" >  
	{{ csrf_field() }}  {{-- 安全機制 token碼 --}}

	<h4>名稱：</h4>
	<input type="text" name="name">
	
	<h4>敘述:</h4>
	<input type="text" name="description">

	<br>
	<br>
	<input type="submit" value="送出">
</form>


{{-- <h1>我要做:{{ $articles->name }} </h1>
<p>任務敘述:{{ $articles->description }} </P> --}}

{{-- 跟task的show.blade.php不一樣..
這是直接cover create.blade.php的程式碼 結果前台就可以顯示了
why??? 那show.blade.php本來的畫面是要顯示在哪裡？--}}