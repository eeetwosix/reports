@extends('layouts/app')
@section('content')

@include('inc/navbar')
    <h1>Posts</h1>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
            {{-- <div class="card p-3">
                <h2><a href="posts/{{$post->id}}">{{$post->title}}</a></h2>
            </div> --}}
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection