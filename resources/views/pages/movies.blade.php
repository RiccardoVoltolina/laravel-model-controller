@extends('layouts.defaultLayout')

@section('main_content')

@foreach ($Movies as $movie)

<div>{{$movie->title}}</div>

@endforeach

@endsection