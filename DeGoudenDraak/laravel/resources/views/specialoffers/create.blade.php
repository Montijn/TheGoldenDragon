@extends('website.layouts.website-layout')

@section('content')
    <div class="container">
        <h1 class="mt-5">Maak Aanbieding</h1>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('specialoffers.store') }}" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Naam:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Beschrijving:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prijs (€):</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="expires_at" class="form-label">Verloop datum:</label>
                <input type="date" name="expires_at" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Menu Items:</label>
                @foreach($menuItems as $menuItem)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="menu_items[]" value="{{ $menuItem->id }}">
                        <label class="form-check-label">{{ $menuItem->name }}</label>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Maak Aan</button>
        </form>
    </div>
@endsection
