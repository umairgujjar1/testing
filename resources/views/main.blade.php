<!DOCTYPE html>
<html lang="en">
<head>
    @stack('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <div>
        <a href="{{ route('home')}}">home</a>
        <a href="{{ route('about')}}">about</a>
        <a href="{{route('contact')}}">contact</a>
    </div>
@yield('content')

<div>
    <p>@copyright.com</p>
</div>


</body>
</html>
