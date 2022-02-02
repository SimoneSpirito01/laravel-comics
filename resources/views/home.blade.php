@extends('layouts.base')

@section('title')
    DC Comics
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <div class="title">
                <span>Current Series</span>
            </div>
            <div class="series">
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
            </div>
            <div class="load">
                <span>Load More</span>
            </div>
        </div>
    </div>
@endsection
