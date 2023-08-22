@extends('website.layouts.website-layout')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-lg-12 row">
            <div class="row">
                <h4>Download hier het menu</h4>
            </div>
            <a href="/pdf">
                <button type="button" class="btn btn-secondary btn-lg">Download</button>
            </a>
        </div>
        <div class="col-lg-12 row">
            <div class="col-lg-12 overflow-auto justify-content-center bg-light">
                <table>
                    <thead>
                    <tr>
                        <th>Nummer</th>
                        <th>Naam</th>
                        <th>Beschrijving</th>
                        <th>Prijs</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($dishes as $dish)
                        <tr>
                            <td>{{$dish->menu_code}}{{$dish->menu_code_addition}}</td>
                            <td>{{$dish->name}}</td>
                            <td>{{$dish->description}}</td>
                            <td>{{round($dish->price, 2)}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
