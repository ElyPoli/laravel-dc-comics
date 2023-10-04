@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', $movie->title)

@section('content')
    {{-- Sezione img poster --}}
    <div class="my-comic-jumbotron-bg">
        <div class="container single-comic-thumb">
            <div class="row row-cols-4">
                <div class="col">
                    <img src="{{ $movie->thumbnail }}" alt="{{ $movie->title }}">
                </div>
            </div>
        </div>
        <div class="single-comic-line">
        </div>
    </div>

    {{-- Sezione descrizione --}}
    <div class="container">
        <div class="d-flex pb-3">
            {{-- Pulsante modifica --}}
            <a href="{{ route('movies.edit', $movie->id) }}" class="btn my-btn-comics me-4">
                <i class="fa-solid fa-pencil"></i> - Edit
            </a>
            {{-- Pulsante elimina --}}
            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                {{-- Token che serve a Laravel per assicurarsi che la chiamata post arrivi da un form del sito  --}}
                @csrf()
                {{-- Specifico il metodo reale da utilizzare --}}
                @method('delete')
                <button class="btn my-btn-comics">
                    <i class="fa-solid fa-eraser"></i> - Delete
                </button>
            </form>
        </div>
        <div class="row gy-3 justify-content-center">
            <div class="col-12 col-sm-8">
                <h1 class="text-uppercase fw-bold fs-3 single-comic-title">{{ $movie->title }}</h1>
                <p class="p-0 m-0 pt-3 pb-3">{{ $movie->extract }}</p>
            </div>
            <div class="col-12 col-sm-4">
                <div class="my-advertising">
                    <p class="text-uppercase text-end fw-bold p-0 m-0">Advertisement</p>
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
    </div>

    {{-- Sezione tabella --}}
    <div class="pt-4 pb-5 table-comic-box mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 gy-3 mt-0">
                <div class="col pe-5">
                    <h4 class="single-comic-title pb-2">Talent</h4>
                    <div class="row element-border-box element-padding-box">
                        <div class="col-6">
                            <p>Cast:</p>
                        </div>
                        <div class="col-6">
                            <span class="my-text-primary"> {{ implode(', ', $movie['cast']) }} </span>
                        </div>
                    </div>
                </div>
                <div class="col ps-5">
                    <h4 class="single-comic-title pb-2">Specs</h4>
                    <div class="row element-border-box element-padding-box">
                        <div class="col-6">
                            <p class="m-0">Year:</p>
                        </div>
                        <div class="col-6">
                            <span class="my-text-primary">{{ $movie->year }}</span>
                        </div>
                    </div>
                    <div class="row element-padding-box">
                        <div class="col-6">
                            <p class="m-0">Genres:</p>
                        </div>
                        <div class="col-6">
                            <p class="my-text-primary">{{ implode(', ', $movie['genres']) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Sezione banner --}}
    <div class="banner single-comic-banner overflow-hidden">
        <div class="row justify-content-center">
            @foreach ($bannerLinks as $link)
                <div class="single-comic-banner-box col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="pt-4 pb-4 d-flex align-items-start justify-content-around">
                        <p class="text-uppercase text-nowrap m-0 p-0"> {{ $link['name'] }} </p>
                        <img src="{{ asset($link['srcImg']) }}" alt="{{ $link['name'] }}" class="pe-2">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
