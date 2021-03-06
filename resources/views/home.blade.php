@extends('layouts.base')

@section('title')
    DC Comics
@endsection

@section('content')
    @foreach ($comics as $serie)
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
