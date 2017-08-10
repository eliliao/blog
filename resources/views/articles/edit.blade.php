<h1>修改家事表單</h1>

<form method="POST" action="/articles/{{ $articles->id }}">  
	{{ csrf_field() }}  {{-- 安全機制 token碼 防止來自外部的表單送資料進來--}}
	{{-- 因為html只支援GET&POST,所以要用另外的input帶上PUT --}}
	{{-- <input type="hidden" name="_method" value="PUT"> --}}
	{{ method_field('put') }}

	<h4>名稱：</h4>
	<input type="text" name="name" value="{{ $articles->name }}">
	
	<h4>敘述:</h4>
	<input type="text" name="description">

	<br>
	<br>
	<input type="submit" value="送出">
</form>
