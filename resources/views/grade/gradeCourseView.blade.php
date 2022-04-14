

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Grade</title>
</head>
<body>
<form action="{{route('addGradeCourse')}}" method="post">
    @csrf
    <select name="grade" >
        <option value="">--select Grade--</option>
        @foreach($grades as $grade)
            <option value="{{$grade->id}}">{{$grade->grade}}</option>
        @endforeach
    </select><br><br>
    <input type="text" name="course" placeholder="Enter Course"><br><br>

    <button type="submit">Add Course</button>
</form>

</body>
</html>
