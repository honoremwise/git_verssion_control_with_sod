
<html>
<body>
@if($course)
<form method="post" action='/update-course/{{$course->id}}'>
    @csrf
<label>Course Name</label><input type="text" name="course" value='{{$course->name}}'></br>
<label>Course Details</label><input type="text" name="details" value='{{$course->details}}'><br>
<button type='submit'>Update</button>
<form>
    @endif

</body>
</html>
