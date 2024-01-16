@extends('website.layouts.website-layout')

@section('content')
    <h1>Create Special Offer</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('specialoffers.store') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>
        <label for="price">Price (€):</label>
        <input type="number" name="price" required>
        <br>
        <label for="expires_at">Expiration Date:</label>
        <input type="date" name="expires_at" required>
        <br>

        <label>Menu Items:</label>
        @foreach($menuItems as $menuItem)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="menu_items[]" value="{{ $menuItem->id }}">
                <label class="form-check-label">{{ $menuItem->name }}</label>
            </div>
        @endforeach

        <br>
        <button type="submit">Create Special Offer</button>
    </form>
@endsection
