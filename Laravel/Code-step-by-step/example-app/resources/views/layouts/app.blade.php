<html>
<head>
    <title>@yield('title', '')</title>
    @vite(['resources/css/app.css', 'resources/css/app.js'])
</head>
<body>
    @yield('content')
    @include('common.inner')
</body>
</html>
