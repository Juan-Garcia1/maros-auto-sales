<header class="d-flex justify-content-end mb-3">
    <form action="{{ route('search') }}" method="GET">
        <p class="mb-1">Search by VIN:</p>
        <div class="input-group">
            <input type="text" class="form-control float-right @error('query') is-invalid @enderror" name="query" value="{{ request()->input('query') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
        </div>
        @error('query')
            <p class="text-danger"><small>{{ $message }}</small></p>
        @enderror
    </form>
</header>