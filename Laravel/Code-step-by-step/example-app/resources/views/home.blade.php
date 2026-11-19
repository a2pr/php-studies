@extends('layouts.app')
@section('title', 'home page')
<h2> this is our HOME page
</h2>

<h3>{{url()->full()}}</h3>

<a href="{{url()->to('about')}}"> about page</a>
<a href="{{url()->to('about', ['name'=>'andres'])}}"> about page child</a>
