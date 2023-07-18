@extends('layout.main-layout')

@section('content')
    <div class="my-3">
        <h1>comics</h1>
        <a class="bg-dark text-light p-1 rounded" href="{{ route('comic.create') }}">Nuovo</a>
    </div>

    <ul class="list-unstyled">
        @foreach ($comics as $comic)
            <li class="my-3"> <a href="{{ route('comic.show', $comic->id) }}">{{ $comic->title }}</a></li>
            <a class="bg-dark p-1 rounded" href="{{ route('comic.edit', $comic->id) }}">EDIT</a>
        @endforeach
    </ul>
@endsection
