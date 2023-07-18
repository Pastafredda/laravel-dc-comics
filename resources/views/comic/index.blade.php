@extends('layout.main-layout')

@section('content')
    <div class="my-3">
        <h1>comics</h1>
        <a class="bg-dark text-light p-1 rounded" href="{{ route('comic.create') }}">Nuovo</a>
    </div>

    <ul class="list-unstyled">
        @foreach ($comics as $comic)
            <li class="my-3"> <a href="{{ route('comic.show', $comic->id) }}">{{ $comic->title }}</a></li>
            <a class="bg-dark p-1 rounded" href="{{ route('comic.edit', $comic->id) }}">Modifica</a>

            <form class="d-inline" method="POST" action="{{ route('destroy', $comic->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina">
            </form>
        @endforeach
    </ul>
@endsection
