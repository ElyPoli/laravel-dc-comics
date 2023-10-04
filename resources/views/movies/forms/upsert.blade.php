<form class="w-75 form-add-comic" action="{{ $action }}" method="POST">
    {{-- Token che serve a Laravel per assicurarsi che la chiamata post arrivi da un form del sito  --}}
    @csrf()
    {{-- Metodo che verrà effettivamente utilizzato --}}
    @method($method)

    <div class="row row-cols-1 gy-3 row-cols-md-2 justify-content-center">
        <div class="col">
            <label class="form-label">Title:</label>
            <input type="text" name="title" value="{{ old('title', $movie?->title) }}"
                class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label">Year:</label>
            <input type="number" name="year" value="{{ old('year', $movie?->year) }}"
                class="form-control @error('year') is-invalid @enderror">
            @error('year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label">Cast:</label>
            <input type="text" name="cast" value="{{ old('cast', implode(", ", $movie?->cast ?? []))}}"
                class="form-control @error('cast') is-invalid @enderror">
            @error('cast')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label">Genres:</label>
            <input type="text" name="genres" value="{{ old('genres', implode(", ", $movie?->genres ?? []))}}"
                class="form-control @error('genres') is-invalid @enderror">
            @error('genres')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label">Extract:</label>
            <textarea name="extract" class="form-control @error('extract') is-invalid @enderror">{{ old('extract', $movie?->extract) }}</textarea>
            @error('extract')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label">Thumbnail:</label>
            <input type="text" name="thumbnail" value="{{ old('thumbnail', $movie?->thumbnail) }}"
                class="form-control @error('thumbnail') is-invalid @enderror">
            @error('thumbnail')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- Pulsanti --}}
    <div class="d-flex justify-content-center pt-3">
        <button type="submit" class="btn my-btn-comics btn-add-comic text-uppercase pe-5 ps-5 me-2">Save</button>
        {{-- Reindirizzo l'utente alla index --}}
        <a href="{{ route('movies.index') }}"
            class="btn my-btn-comics btn-add-comic text-uppercase pe-5 ps-5 ms-2">Cancel</a>
    </div>
</form>
