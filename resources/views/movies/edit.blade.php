@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - Edit Movie')

@section('content')

    <div class="my-comic-jumbotron-bg form-jumbotron-bg">
        <h3 class="p-0 m-0 fs-4 pt-5 text-center fw-bold text-uppercase">
            <span class="text-uppercase">
                Edit Movie -
            </span>
            {{ $movie->title }}
        </h3>
        <div class="container pt-5 pb-5">
            <div class="d-flex justify-content-center">
                {{-- Form per modificare il film  --}}
                @include('movies.forms.upsert', [
                    'action' => route('movies.update', $movie->id),
                    'method' => 'PUT',
                    'movie' => $movie
                ])
            </div>
        </div>
    </div>
@endsection
