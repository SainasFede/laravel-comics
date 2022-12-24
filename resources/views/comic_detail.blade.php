@extends('layouts.main')

@section('content')


<section class="container-comic">
    <div class="comic-detail">
        <div class="box-img">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="description">
            <h1>{{$comic['title']}}</h1>
            <p>{!! $comic['description'] !!}</p>
            <div class="price">
                <h4>{{$comic['price']}}</h4>
            </div>
        </div>
    </div>
</section>


@endsection
