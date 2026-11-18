
@include('common.header')
Hello laravel
<a href="/about">about</a>
<a href="/contact">contact</a>
<a href="/about/andres">about andres</a>
{{--
<a href="{{route('about')}}">about</a>
<a href="{{route('contact')}}">contact</a>
<a href="{{route('contact', ['user'=> 'andres'])}}">contact andres</a>
--}}
@include('common.inner', ['name'=> 'student'])
