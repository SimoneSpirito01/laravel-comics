@extends('layouts.base')

@section('title')
    DC Comics - TV
@endsection

@section('content')
    @foreach ($tv as $serie)
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