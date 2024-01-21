@extends('website.layouts.website-layout')

@section('content')
    <link rel='stylesheet' type='text/css' href="{{ asset('/css/menu.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <a href="{{ route('favorites') }}">My Favorites</a>
    <a href="{{ route('pdf') }}" class="btn btn-success">Download Menu PDF</a>
    @if(auth()->user() && auth()->user()->is_Admin == 1)
        <div class="admin-buttons">
            <a href="{{ route('menu.create') }}" class="btn btn-primary">Nieuw</a>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Categorie</th>
            <th>Menunummer</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Prijs</th>
            @if(auth()->user() && auth()->user()->is_Admin == 1)
                <th>Actions</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($menuItems as $menuItem)
            <tr>
                <td>{{ $menuItem->Dish_Type->name }}</td>
                <td>{{ $menuItem->menu_code }} {{ $menuItem->menu_code_addition }}</td>
                <td>{{ $menuItem->name }}</td>
                <td>{{ $menuItem->description }}</td>
                <td>
                    @if($menuItem->hasSpecialOffer())
                        <del>€ {{ number_format($menuItem->price, 2) }}</del> <p>€ {{ number_format($menuItem->getDiscountedPrice(), 2) }}</p>
                    @else
                        € {{ number_format($menuItem->price, 2) }}
                    @endif
                </td>
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
                @if(auth()->user() && auth()->user()->is_Admin == 1)
                    <td>
                        <a href="{{ route('menu.edit', $menuItem->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('menu.destroy', $menuItem->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Verwijder</button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
