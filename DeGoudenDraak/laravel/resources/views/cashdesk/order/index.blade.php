@extends('layouts.layout')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <h1>Overview of All Orders</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($orders->isEmpty())
                    <p>No orders available.</p>
                @else
                    <ul class="list-group">
                        @foreach($orders as $order)
                            <li class="list-group-item">
                                Order ID: {{ $order->id }} | Table ID: {{ $order->table_id }}
                                Total Price: €{{ number_format($order->totalPrice, 2) }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
