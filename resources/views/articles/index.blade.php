<!doctype html>
<html>

<h1> Hello, {{ $name }} </h1>
<p> Your age is : <?php echo $age;?> </p>

要做的家事:
<ul>
    @foreach ($articles as $articles_object)

        <li> 
        	<a href="/articles/{{ $articles_object->id }}">
        	    {{ $articles_object->name }}
        	</a>    
        </li>

   @endforeach
</ul>

</html>
