@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

    <main>
        @foreach ($movie as $item)
        <div>
            <h3>Titolo: {{ $item['title'] }}</h3>
            <h3>Titolo Originale: {{ $item['original_title'] }}</h3>
            <h4>Nazionalita: {{ $item['nationality'] }}</h4>
            <h4>Data di Pubblicazione: {{ $item['date'] }}</h4>
            <h4>Voto: {{ $item['vote'] }}</h4>
        </div>
        @endforeach
    </main>
