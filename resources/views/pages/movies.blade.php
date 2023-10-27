@extends('layouts.defaultLayout')

@section('main_content')

@foreach ($laravel_model_controller as $movie)

<div>{{$movie->title}}</div>

@endforeach

@endsection