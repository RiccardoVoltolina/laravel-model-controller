@extends('layouts.defaultLayout')

@section('main_content')

<div class="container">
    <div class="row">
        <div class="col d-flex flex-wrap">
            
            @foreach ($Movies as $movie)

            <div class="card m-3 text-white bg-primary" style="width: 18rem;">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                <div class="card-title"><h5>Titolo:</h5>  {{$movie->title}}</div>
                <div class="card-text"><h5>Titolo originale:</h5>  {{$movie->original_title}}</div>
                <div><h5>Nazionalità:</h5>  {{$movie->nationality}}</div>
                <div><h5>Data pubblicazione:</h5>  {{$movie->date}}</div>
                <div><h5>Voto:</h5>  {{$movie->vote}}</div>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</div>

<style>
    body {
        background-color: black
    }
</style>

@endsection