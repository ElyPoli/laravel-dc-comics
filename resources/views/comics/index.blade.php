@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - Comics')

@section('content')
    {{-- Sezione current series --}}
    <div class="comics-main">
        <img src="{{ asset('img/jumbotron.jpg') }}" alt="bg image" class="my-jumbotron">
        <div class="container pb-3">
            <div class="section-comics-title">
                <h3 class="text-uppercase p-0 m-0 fs-5">
                    current series
                </h3>
            </div>
            <div class="row">
                @foreach ($comicsList as $comic)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="comics-list pt-3 d-flex justify-content-center">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                                <p class="text-white text-uppercase m-0 p-0 pt-2"> {{ $comic->series }} </p>
                            </a>
                            <div class="my-card-btn-box">
                                <div>
                                    {{-- Pulsante modifica --}}
                                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                        class="btn my-btn-comics my-btn-edit mb-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    {{-- Pulsante elimina --}}
                                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                        {{-- Token che serve a Laravel per assicurarsi che la chiamata post arrivi da un form del sito  --}}
                                        @csrf()
                                        {{-- Specifico il metodo reale da utilizzare --}}
                                        @method('delete')
                                        <button class="btn my-btn-comics my-btn-edit">
                                            <i class="fa-solid fa-eraser"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex align-items-center justify-content-center pt-2">
                <a href="{{ route('comics.create') }}" class="btn my-btn-comics text-uppercase pe-5 ps-5">
                    Add new comic
                </a>
            </div>
        </div>
    </div>

    {{-- Sezione banner --}}
    <div class="banner pt-4 pb-4 overflow-hidden">
        <div class="row justify-content-center">
            @foreach ($bannerLinks as $link)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset($link['srcImg']) }}" alt="{{ $link['name'] }}" class="pe-2">
                        <p class="text-white text-uppercase text-nowrap m-0 p-0"> {{ $link['name'] }} </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
