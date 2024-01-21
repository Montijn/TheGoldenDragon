@extends('website.layouts.website-layout')
@section('content')
    <h1>Latest News</h1>

    @if(Auth::check() && Auth::user()->is_Admin == 1)
        <div>
            <a href="{{ route('news.create') }}" class="btn btn-success">Maak nieuws artikel</a>
        </div>
    @endif

    @foreach($news as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            <p>Geplaatst op: {{ $article->created_at->format('F j, Y') }}</p>

            @if(Auth::check() && Auth::user()->is_Admin == 1)
                <div>
                    <a href="{{ route('news.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('news.destroy', $article->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                </div>
            @endif

        </div>
        <hr>
    @endforeach
@endsection
