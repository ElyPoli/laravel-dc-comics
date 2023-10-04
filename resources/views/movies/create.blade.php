@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - New Movie')

@section('content')

    <div class="my-comic-jumbotron-bg form-jumbotron-bg">
        <h3 class="p-0 m-0 fs-4 pt-5 text-center fw-bold text-uppercase">
            Add New Movie
        </h3>
        <div class="container pt-5 pb-5">
            <div class="d-flex justify-content-center">
                {{-- Form per inserire un nuovo film  --}}
                @include('movies.forms.upsert', [
                    'action' => route('movies.store'),
                    'method' => 'POST',
                    'movie' => null
                ])
            </div>
        </div>
    </div>
@endsection
