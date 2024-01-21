@extends('website.layouts.website-layout')

@section('content')
    <h1>Aanbiedingen</h1>

    @if(auth()->user() && auth()->user()->is_Admin == 1)
        <a href="{{ route('specialoffers.create') }}" class="btn btn-primary">Nieuw Aanbieding</a>
    @endif

    <ul>
        @foreach($specialOffers as $offer)
            <li>
                {{ $offer->name }} - {{ $offer->description }} - €{{ $offer->price }} (Verloopt: {{ $offer->expires_at->format('Y-m-d') }})

                @if ($offer->menuItems->isNotEmpty())
                    <ul>
                        @foreach ($offer->menuItems as $menuItem)
                            <li>{{ $menuItem->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Deze aanbieding heeft nog geen gerechten</p>
                @endif

                @if(auth()->user() && auth()->user()->is_Admin == 1)
                    <a href="{{ route('specialoffers.edit', $offer->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('specialoffers.destroy', $offer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>

                @endif
            </li>
        @endforeach
    </ul>
@endsection
