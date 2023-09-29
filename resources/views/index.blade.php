@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - Home')

@section('content')
    <h1>Comics</h1>
    <div class="container">
        <div class="row row-cols-4 gy-4">
            @foreach ($comicsList as $comic)
                <div class="col">
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
            @endforeach
        </div>
    </div>
@endsection
