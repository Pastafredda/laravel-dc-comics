@extends('layout.main-layout')

@section('content')
    <h1>Modifica il tuo comic</h1>

    <form method="POST" action="{{ route('update', $comic->id) }}">
        @csrf
        @method('PUT')
        <label for="title">Titolo</label>
        <br>
        <input type="text" name="title" id="title" value="{{ $comic->title }}">
        <br>
        <label for="description">Descrizione</label>
        <br>
        <input type="text" name="description" id="description" value="{{ $comic->description }}">
        <br>
        <label for="thumb">Immagine di copertina</label>
        <br>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        <br>
        <label for="price">Prezzo</label>
        <br>
        <input type="text" name="price" id="price" value="{{ $comic->price }}">
        <br>
        <label for="series">Serie del fumetto</label>
        <br>
        <input type="text" name="series" id="series" value="{{ $comic->series }}">
        <br>
        <label for="sale_date">Data di vendita</label>
        <br>
        <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
        <br>
        <label for="type">Tipo di fumetto</label>
        <br>
        <input type="text" name="type" id="type" value="{{ $comic->type }}">
        <br>

        <input class="my-3" type="submit" value="salva le modifiche">

    </form>
@endsection
