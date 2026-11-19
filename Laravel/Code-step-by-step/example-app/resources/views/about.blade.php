@extends('layouts.app')
@section('title','about')
@section('content')
<h1> ABOUT {{$data ?? ''}}</h1>
{{url()->previous()}}
<a href="{{route('home')}}">Go to home</a>
<a href="{{route('home.show')}}">Go to home 2</a>
<a href="{{route('user.details', ['name'=>'andres'])}}">visit user details</a>

@endsection
