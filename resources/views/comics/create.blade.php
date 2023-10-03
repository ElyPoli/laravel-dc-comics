@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - New Comic')

@section('content')

    <div class="my-comic-jumbotron-bg form-jumbotron-bg">
        <div class="container pt-5 pb-5">
            <div class="d-flex justify-content-center">
                {{-- Form per inserire un nuovo comic  --}}
                <form class="w-75 form-add-comic" action="{{ route('comics.store') }}" method="POST">
                    {{-- Token che serve a Laravel per assicurarsi che la chiamata post arrivi da un form del sito  --}}
                    @csrf()
                    <div class="row row-cols-1 gy-3 row-cols-md-2 justify-content-center">
                        <div class="col">
                            <label class="form-label">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="col">
                            <label class="form-label">Description:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="col">
                            <label class="form-label">Thumb:</label>
                            <input type="text" class="form-control" name="thumb">
                        </div>
                        <div class="col">
                            <label class="form-label">Price:</label>
                            <input type="number" step="0.01" class="form-control" name="price">
                        </div>
                        <div class="col">
                            <label class="form-label">Series:</label>
                            <input type="text" class="form-control" name="series">
                        </div>
                        <div class="col">
                            <label class="form-label">Date Sales:</label>
                            <input type="date" class="form-control" name="sale_date">
                        </div>
                        <div class="col">
                            <label class="form-label">Type:</label>
                            <input type="text" class="form-control" name="type">
                        </div>
                        <div class="col">
                            <label class="form-label">Artists:</label>
                            <input type="text" class="form-control" name="artists">
                        </div>
                        <div class="col">
                            <label class="form-label">Writers:</label>
                            <input type="text" class="form-control" name="writers">
                        </div>
                    </div>

                    {{-- Pulsanti --}}
                    <div class="d-flex justify-content-center pt-3">
                        <button type="submit"
                            class="btn my-btn-comics btn-add-comic text-uppercase pe-5 ps-5 me-2">Add</button>
                        {{-- Reindirizzo l'utente alla index --}}
                        <a href="{{ route('comics.index') }}"
                            class="btn my-btn-comics btn-add-comic text-uppercase pe-5 ps-5 ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
