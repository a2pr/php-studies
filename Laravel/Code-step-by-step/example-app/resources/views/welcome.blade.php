<html>
<head>
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
    @vite(['resources/js/app.js'])

</head>
<body>

@include('common.header')
Hello laravel
<a class="green-heading" href="/about">about</a>
<a href="/contact">contact</a>
<a href="/about/andres">about andres</a>
{{--
<a href="{{route('about')}}">about</a>
<a href="{{route('contact')}}">contact</a>
<a href="{{route('contact', ['user'=> 'andres'])}}">contact andres</a>
--}}
@include('common.inner', ['name'=> 'student'])
</body>
</html>
