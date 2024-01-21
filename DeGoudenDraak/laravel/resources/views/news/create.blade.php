@extends('website.layouts.website-layout')

@section('content')
    <h1>Nieuw nieuws artikel</h1>

    <form method="POST" action="{{ route('news.store') }}">
        @csrf

        <label for="title">Titel:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <button type="submit">Submit</button>
    </form>
@endsection
