<!doctype html>
<html lang="en">
<head>
    @include('HeaderFooter.header')
    <title>Home Page</title>
</head>
<body>
{{--[$user,$user_grade,$user_track]--}}

<h4>Hello {{$user->name}}</h4>
<h5>Your Grade is {{$user->user_grade->grade}} ====><button name="gradeCourseBtn" class="btn btn-primary" type="submit">Show Grade Course</button></h5>
<h6>your Track is {{$user->user_track->track}} ====> <button name="trackCourseBtn" class="btn btn-primary" type="submit">Show Track Course</button></h6>






@include('HeaderFooter.footer')
</body>
</html>
