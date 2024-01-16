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
                        <form method="get" action="{{ route('cashdesk.order.search') }}" class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" required/>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <div class=" mb-3">
                            <form method="get" action="{{ route('cashdesk.order.create') }}">
                                <button type="submit" name="sortBy" value="dish_type" class="btn btn-link{{ $sortBy === 'dish_type' ? ' active' : '' }}">Sort by Dish Type</button>
                                <button type="submit" name="sortBy" value="menu_code" class="btn btn-link{{ $sortBy === 'menu_code' ? ' active' : '' }}">Sort by Menu Code</button>
                            </form>
                        </div>
                        @if($searchResult->isNotEmpty())
                            <div class="card bg-light border border-2 mb-4 mt-4 p-3">
                                @foreach ($searchResult as $result)
                                    <div class="card mb-3">
                                        <div class="card-body d-flex justify-content-between">
                                            <form method="get" action="{{ route('cashdesk.order.addtoorder', $result->id) }}">
                                                <label>
                                                    {{ $result->name }}
                                                </label>
                                                <label>
                                                    {{$result->menu_code}}
                                                </label>
                                                <label>
                                                    €{{ $result->price }}
                                                </label>
                                                <input type="number" name="quantities[{{ $result->id }}]" value="1" min="1" style="width: 40px;">
                                                <input type="text" name="comment[{{ $result->id }}]" placeholder="">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Voeg toe</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @foreach($dishes as $dish)
                            <div class="card mb-3">
                                <div class="card-body d-flex justify-content-between">
                                    <form  method="get" action="{{ route('cashdesk.order.addtoorder', $dish->id) }}">
                                        <label>
                                            {{ $dish->name }}
                                        </label>
                                        <label>
                                            {{$dish->menu_code}} {{$dish->menu_code_addition}}
                                        </label>
                                        <label>
                                            @if($dish->hasSpecialOffer())
                                                <del>€{{ number_format($dish->price, 2) }}</del> €{{ number_format($dish->getDiscountedPrice(), 2) }}
                                            @else
                                                €{{ number_format($dish->price, 2) }}
                                            @endif
                                        </label>
                                        <input type="number" name="quantities[{{ $dish->id }}]" value="1" min="1" style="width: 40px;">
                                        @csrf
                                        <input type="text" name="comment[{{ $dish->id }}]" placeholder="">
                                        <button type="submit" class="btn btn-primary">Voeg toe</button>
                                    </form>
                                </div>
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
                                <p>
                                    {{ $orderItem['name'] }} - {{$orderItem['menu_code'] }} {{$orderItem['menu_code_addition'] }}
                                    -
                                    @if($orderItem['hasSpecialOffer'])
                                        <del>€ {{ number_format($orderItem['price'], 2) }}</del> € {{ number_format($orderItem['getDiscountedPrice'], 2) }}
                                    @else
                                        € {{ number_format($orderItem['price'], 2) }}
                                    @endif
                                    x {{ $orderItem['amount'] }} {{ $orderItem['comment'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="order-total">
                        <h2>Totaal</h2>
                        <p>€{{ number_format($total, 2) }}</p>
                    </div>
                    <form method="POST" action="{{ route('cashdesk.order.store') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Afrekenen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
