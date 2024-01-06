@extends('website.layouts.website-layout')

@section('content')
    <link rel='stylesheet' type='text/css' href="{{ asset('/css/menu.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <a href="{{ route('favorites') }}">My Favorites</a>

    <table class="table">
        <thead>
        <tr>
            <th>Categorie</th>
            <th>Menunummer</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Prijs</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menuItems as $menuItem)
            <tr>
                <td>{{ $menuItem->Dish_Type->name }}</td>
                <td>{{ $menuItem->menu_code }} {{ $menuItem->menu_code_addition }}</td>
                <td>{{ $menuItem->name }}</td>
                <td>{{ $menuItem->description }}</td>
                <td>€ {{ $menuItem->price }}</td>
                <td>
                    @if(in_array($menuItem->id, $favorites))
                        <a href="{{ route('favorite.remove', $menuItem->id) }}">
                            <i class="fas fa-star" style="color: gold;"></i>
                        </a>
                    @else
                        <a href="{{ route('favorite.add', $menuItem->id) }}">
                            <i class="far fa-star" style="color: white;"></i>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
