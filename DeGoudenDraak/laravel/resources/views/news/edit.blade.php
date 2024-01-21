@extends('website.layouts.website-layout')

@section('content')
    <div class="container mt-4">
        <h1>Edit Nieuws Artikel</h1>

        <form action="{{ route('news.update', $newsItem->id) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="title" class="form-label">Titel:</label>
                <input type="text" class="form-control" name="title" value="{{ $newsItem->title }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" name="content" required>{{ $newsItem->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update nieuws artikel</button>
        </form>
    </div>
@endsection
