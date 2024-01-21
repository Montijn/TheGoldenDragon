@extends('website.layouts.website-layout')

@section('content')
    <h1>Edit News Item</h1>

    <form action="{{ route('news.update', $newsItem->id) }}" method="post">
        @csrf
        @method('PATCH')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $newsItem->title }}" required>

        <label for="content">Content:</label>
        <textarea name="content" required>{{ $newsItem->content }}</textarea>

        <button type="submit">Update News Item</button>
    </form>
@endsection
