@extends('layouts.public')

{{-- Indico il titolo della pagina --}}
@section('title', 'Laravel comics - New Comic')

@section('content')
    <div class="container pt-5 pb-5">
        {{-- Form per inserire un nuovo comic --}}
        <form action="{{ route("comics.store") }}" method="POST">
            @csrf()
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label class="form-label">Date Sales</label>
                <input type="date" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists">
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers">
            </div>

            {{-- Pulsanti --}}
            <button type="submit" class="btn my-btn-comics text-uppercase pe-5 ps-5">Add</button>
            <a href="{{ route('comics.index') }}" class="btn my-btn-comics text-uppercase pe-5 ps-5">Cancel</a>
        </form>
    </div>
@endsection
