<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'PHP Vite Starter')</title>
    {!! $vite('main.js') !!}
</head>

<body class="bg-gray-50 text-gray-900 p-8">
    @yield('content')
</body>

</html>