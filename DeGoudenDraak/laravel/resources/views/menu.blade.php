@extends('website.layouts.website-layout')


@section('content')
    <link rel='stylesheet' type='text/css' href="{{asset('/css/menu.css')}}">
    <table  class="styled-table">
        <thead>
        <tr>
            <th>Categorie</th>
            <th>Menunummer</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th style="width:7%">Prijs</th>
        </tr>
        </thead>

        <tbody>
        @foreach($menuItems as $menuItem)
            <tr>
                <td>{{$menuItem->Dish_Type->name}}</td>
                <td>{{$menuItem->menu_code}} {{$menuItem->menu_code_addition}}</td>
                <td>{{$menuItem->name}}</td>
                <td>{{$menuItem->description}}</td>
                <td>€ {{$menuItem->price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
