@extends('layouts.layout')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <h1>Maak bestelling aan</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="menu-container">
                    <div class="menu-items">
                        <h2>Menu</h2>
                        <form method="get" action="{{ route('cashdesk.order.create') }}">
                            <label for="search">Search:</label>
                            <input type="text" name="search" id="search" value="{{ $searchTerm }}">
                            <button type="submit">Search</button>
                        </form>
                        @foreach($dishes as $dish)
                            <div class="menu-item">
                                <label>
                                    <form method="get" action="{{ route('cashdesk.order.addtoorder', $dish->id) }}">
                                        {{ $dish->name }} - €{{ $dish->price }}
                                        <input type="number" name="quantities[{{ $dish->id }}]" value="1" min="1" style="width: 40px;">
                                        @csrf
                                        <button>Voeg toe</button>
                                    </form>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="order-container">
                    <div class="order-items">
                        <h2>Bestelling</h2>
                        @foreach($order as $orderItem)
                            <div class="order-item">
                                <p>{{ $orderItem['name'] }} - €{{ $orderItem['price'] }} x {{ $orderItem['amount'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="order-total">
                        <h2>Totaal</h2>
                        <p>€{{ number_format($total, 2) }}</p>
                    </div>
                    <form method="POST" action="{{ route('cashdesk.order.store') }}">
                        @csrf
                        <button type="submit">Afrekenen</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
