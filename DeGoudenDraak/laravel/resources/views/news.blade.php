@extends('website.layouts.website-layout')
@section('content')
    <h1>Latest News</h1>

    @foreach($news as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            <p>Geplaatst op: {{ $article->created_at->format('F j, Y') }}</p>
        </div>
        <hr>
    @endforeach
@endsection
