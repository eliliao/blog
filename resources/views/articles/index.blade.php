<!doctype html>
<html>

<h1> Hello, {{ $name }} </h1>
<p> Your age is : <?php echo $age;?> </p>

<a href="/articles/create">新增ㄧ件家事</a>   {{-- 7/27上課新增 --}}
<br>
<br>

要做的家事:
<table>
   	<thead>
   		<tr>
   			<th style="text-align:left">ID</th>
   		  <th style="text-align:left">名稱</th>
   			<th style="text-align:left">操作</th>
   		</tr>
   	</thead>
   	<tbody>
   		@foreach ($articles as $articles_object)
   			<tr>
   				<td>{{ $articles_object->id }}</td>
   				<td>
   					<a href="/articles/{{ $articles_object->id }}">
        	  		   {{ $articles_object->name }}
        		</a>
   				</td>
   				<td>
   					<a href="/articles/{{ $articles_object->id }}/edit">
   						修改	
   					</a>
   					&nbsp;
   					<a href="#">
   						刪除
   					</a>
   				</td>
   			</tr>		

		  @endforeach

   	</tbody>
   					
<ul>
    @foreach ($articles as $articles_object)

        <li>     
        </li>

   @endforeach
</ul>

</html>
