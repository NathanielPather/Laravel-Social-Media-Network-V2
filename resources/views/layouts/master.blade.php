<html>
<head>
    <title>Social Media Network - @yield('title')</title>
</head>

<body>
@section('navbar')
    This is the master navbar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
