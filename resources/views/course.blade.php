
<html>

<body>
<form method="post" action='/create-course'>
    @csrf
<label>Course Name</label><input type="text" name="course"></br>
<label>Course Details</label><input type="text" name="details"><br>
<button type='submit'>Save</button>
<form>

</body>
</html>
