<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
         


            <!-- <li><a href="/myapp/home">Home</a></li>
            <li><a href="/myapp/product">Product</a></li>
            <li><a href="/myapp/teams">Teams</a></li>
            <li><a href="/myapp/about">About Us</a></li>
            <li><a href="/myapp/contact">Contact Us</a></li> -->


            <li><a href="{{route('myapp/home')}}">Home</a></li>
            <li><a href="{{route('myapp/product')}}">Product</a></li>
            <li><a href="{{route('myapp/teams')}}">Teams</a></li>
            <li><a href="{{route('myapp/about')}}">About Us</a></li>
            <li><a href="{{route('myapp/contact')}}">Contact Us</a></li>
        </ul>
    </div>
    @yield('content')
</body>
</html>