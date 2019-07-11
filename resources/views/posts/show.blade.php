@extends('layouts/app')

@section('content')

@include('inc/navbar')
<a href = "/posts">go back</a>
<h2>{{$post->title}}</h2>

@endsection