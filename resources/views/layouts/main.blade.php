<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("build/assets/css/app.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav-bar">
        <h1><a href="{{ url('/articles') }}" class="title">Burger Shop</a></h1>
        <ul>
            <li><a href="{{ url('/articles') }}">Home</a></li>
            <li><a href="#menu-list">Menus</a></li>
            <li><a href="{{ url('/articles/order') }}">Order</a></li>
            <li><a href="#review">review</a></li>
            <li><a href="#Footer">Contact Me</a></li>
        </ul>
    </nav>
    @yield("content")
    <script src="{{ asset("build/assets/js/burger.js") }}" defer></script>
</body>
</html>
