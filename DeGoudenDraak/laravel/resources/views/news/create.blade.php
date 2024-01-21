@extends('website.layouts.website-layout')
@section('content')
    <div class="container mt-4">
        <h1>Nieuw nieuws artikel</h1>

        <form method="POST" action="{{ route('news.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titel:</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" name="content" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Sla op</button>
        </form>
    </div>
@endsection
