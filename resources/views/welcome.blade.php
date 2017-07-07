<!doctype html>
<html>

<h1> Hello, {{ $name }} </h1>
<p> Your age is : <?php echo $age;?> </p>

要做的家事:
<ul>
   <?php foreach ($tasks as $tasks_name): ?>
    @foreach ($tasks as $task_name)
    
        <li> {{ $tasks_name }} </li>

   <?php endforeach ?>
</ul>

</html>
