<html>
<body>

<table border='1'>
<tr><th>ID</th><th>Name</th><th>Details</th><th>Action</th></tr>


@foreach($courses as $course)
<tr><td>{{$course->id}}</td><td>{{$course->name}}</td>
<td>{{$course->details}}</td>
<td><a href='/edit/{{$course->id}}'>Edit</a> | 
<a href='/delete/{{$course->id}}'>Delete</a></td></tr>
@endforeach
</table>
</body>
</html>
