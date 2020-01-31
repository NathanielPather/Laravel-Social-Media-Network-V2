<html>
<head>
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <title>Social Media Network - @yield('title')</title>
</head>

<body>
<ul>
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Login</a></li>
</ul>

<div class="container">
    @yield('content')
</div>
</body>
</html>
