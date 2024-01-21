@extends('website.layouts.website-layout')

@section('content')
    <h1>Je favoriete gerechten</h1>

    @forelse($favoriteMenuItems as $favoriteMenuItem)
        <div>
            <p>{{ $favoriteMenuItem->name }}</p>
            <p>{{ $favoriteMenuItem->description }}</p>
            <p>Prijs: € {{ $favoriteMenuItem->price }}</p>
        </div>
        <hr>
    @empty
        <p>Je hebt geen favorieten!</p>
    @endforelse
@endsection
