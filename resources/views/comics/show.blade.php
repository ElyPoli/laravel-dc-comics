@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', $comic->title)

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="height: 150px">
            <ul>
                <li>{{ $comic->title }}</li>
                <li>{{ $comic->description }}</li>
                <li>{{ $comic->price }}</li>
                <li>{{ $comic->series }}</li>
                <li>{{ $comic->sale_date }}</li>
                <li>{{ $comic->type }}</li>
                <li>{{ $comic->artists }}</li>
                <li>{{ $comic->writers }}</li>
            </ul>
        </div>
    </div>
@endsection