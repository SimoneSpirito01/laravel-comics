@extends('layouts.base')

@section('title')
    DC Comics - Movies
@endsection

@section('content')
    @foreach ($movies as $serie)
        <div class="serie">
            <div class="image">
                <img src="{{$serie['thumb']}}" alt="{{$serie['title']}}">
            </div>
            <div class="text">
                <span>{{$serie['title']}}</span>
            </div>
        </div>
    @endforeach
@endsection