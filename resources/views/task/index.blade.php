<!doctype html>
<html>

<h1> Hello, {{ $name }} </h1>
<p> Your age is : <?php echo $age;?> </p>

<a href="/task/create">新增ㄧ件家事</a>   {{-- 7/27上課新增 --}}
<br>
<br>

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
