@extends('layout.main-layout')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <div>
        <img src="{{ $comic->thumb }}" alt="">
    </div>
    <div class="row my-4">
        <span class="col">{{ $comic->price }}</span>
        <span class="col">{{ $comic->series }}</span>
        <span class="col">{{ $comic->sale_date }}</span>
        <span class="col">{{ $comic->type }}</span>
    </div>

    <p>{{ $comic->description }}</p>
@endsection
