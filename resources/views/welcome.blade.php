<!doctype html>
<html>

<h1> Hello, {{ $name }} </h1>
<p> Your age is : <?php echo $age;?> </p>

這一週的待辦事項                      :
<ul>
    @foreach ($articles as $articles_object)

        <li> 
        	<a href="/articles/{{ $articles_object->id }}">
        	    {{ $articles_object->name }}  {{-- 印出DB的欄位 記得要對應名稱  --}}
        	    							  {{-- html的註解方式要按command + / --}}
        	</a>    
        </li>

   @endforeach
</ul>

</html>
