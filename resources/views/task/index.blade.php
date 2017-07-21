<!doctype html>
<html>

<h1> Hello, {{ $name }} </h1>
<p> Your age is : <?php echo $age;?> </p>

要做的家事:
<ul>
    @foreach ($tasks as $task_object)

        <li> 
        	<a href="/task/{{ $task_object->id }}">
        	    {{ $task_object->name }}
        	</a>    
        </li>

   @endforeach
</ul>

</html>
