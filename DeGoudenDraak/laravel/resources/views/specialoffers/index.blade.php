@extends('website.layouts.website-layout')

@section('content')
    <h1>Aanbiedingen</h1>

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
            </li>
        @endforeach
    </ul>
@endsection
