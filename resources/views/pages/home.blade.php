<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaravelDemo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <h1> Home page </h1>

    Home | <a href="{{url('/contact')}}">Contact</a> | <a href="{{url('/skills')}}">Skills</a> | <a href="{{url('/education')}}">Education</a> | <a href="{{url('/resume')}}">Resume</a>
</body>
</html>
