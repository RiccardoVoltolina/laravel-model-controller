@extends('layouts.defaultLayout')

@section('main_content')

@foreach ($Movies as $movie)

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$movie->title}}</h5>
      <div class="card-text">{{$movie->original_title}}</div>
      <div>{{$movie->nationality}}</div>
      <div>{{$movie->date}}</div>
      <div>{{$movie->vote}}</div>
    </div>
  </div>


@endforeach

@endsection