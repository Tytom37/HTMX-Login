<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/htmx.min.js')}}"></script>
    <script src="{{asset('js/tailwind.min.js')}}"></script>
    <title>Final HTMX</title>
</head>
<body>
    <div id="main-content">
        @yield('content')
    </div>
</body>
</html>