@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - Edit Comic')

@section('content')

    <div class="my-comic-jumbotron-bg form-jumbotron-bg">
        <div class="container pt-5 pb-5">
            <div class="d-flex justify-content-center">
                {{-- Form per inserire un nuovo comic  --}}
                <form class="w-75 form-add-comic" action="{{ route('comics.update', $comic->id) }}" method="POST">
                    {{-- Token che serve a Laravel per assicurarsi che la chiamata post arrivi da un form del sito  --}}
                    @csrf()
                    {{-- Specifico il metodo reale da utilizzare --}}
                    @method('put')
                    <h3 class="p-0 m-0 fs-4 pt-2 pb-4 text-center fw-bold">
                        <span class="text-uppercase">
                            Edit Comic -
                        </span>
                        {{ $comic->title }}
                    </h3>
                    <div class="row row-cols-1 gy-3 row-cols-md-2 justify-content-center">
                        <div class="col">
                            <label class="form-label">Title:</label>
                            <input type="text" name="title" value="{{ old('title', $comic->title) }}"
                                class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Description:</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $comic->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Thumb:</label>
                            <input type="text" name="thumb" value="{{ old('thumb', $comic->thumb) }}"
                                class="form-control @error('thumb') is-invalid @enderror">
                            @error('thumb')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Price:</label>
                            <input type="number" step="0.01" name="price" value="{{ old('price', $comic->price) }}"
                                class="form-control @error('price') is-invalid @enderror">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Series:</label>
                            <input type="text" name="series" value="{{ old('series', $comic->series) }}"
                                class="form-control @error('series') is-invalid @enderror">
                            @error('series')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Date Sales:</label>
                            <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}"
                                class="form-control @error('sale_date') is-invalid @enderror">
                            @error('sale_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Type:</label>
                            <input type="text" name="type" value="{{ old('type', $comic->type) }}"
                                class="form-control @error('type') is-invalid @enderror">
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Artists:</label>
                            <input type="text" name="artists"
                                value="{{ old('artists', implode(', ', $comic->artists)) }}"
                                class="form-control @error('artists') is-invalid @enderror">
                            @error('artists')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label">Writers:</label>
                            <input type="text" name="writers"
                                value="{{ old('writers', implode(', ', $comic->writers)) }}"
                                class="form-control @error('writers') is-invalid @enderror">
                            @error('writers')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Pulsanti --}}
                    <div class="d-flex justify-content-center pt-3">
                        <button type="submit"
                            class="btn my-btn-comics btn-add-comic text-uppercase pe-5 ps-5 me-2">Edit</button>
                        {{-- Reindirizzo l'utente alla index --}}
                        <a href="{{ route('comics.index') }}"
                            class="btn my-btn-comics btn-add-comic text-uppercase pe-5 ps-5 ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
