@extends('layout.main-layout')

@section('content')
    <h1>Nuovo Comic</h1>

    <form method="POST" action="{{ route('comic.store') }}">
        @csrf

        <label for="title">Titolo</label>
        <br>
        <input type="text" name="title">
        <br>
        <label for="description">Descrizione</label>
        <br>
        <input type="text" name="description">
        <br>
        <label for="thumb">Immagine di copertina</label>
        <br>
        <input type="text" name="thumb">
        <br>
        <label for="price">Prezzo</label>
        <br>
        <input type="text" name="price">
        <br>
        <label for="series">Serie del fumetto</label>
        <br>
        <input type="text" name="series">
        <br>
        <label for="sale_date">Data di vendita</label>
        <br>
        <input type="date" name="sale_date">
        <br>
        <label for="type">Tipo di fumetto</label>
        <br>
        <input type="text" name="type">
        <br>

        <input class="my-3" type="submit" value="Crea Nuovo">

    </form>
@endsection
