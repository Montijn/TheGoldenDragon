@extends('website.layouts.website-layout')

@section('content')
    <div class="container">
        <h2>Guests</h2>
        <a href="{{ route('guests.create') }}" class="btn btn-primary mb-3">Create Guest</a>

        <table class="table">
            <thead>
            <tr>
                <th>Gast Nummer</th>
                <th>Naam</th>
                <th>Leeftijd</th>
                <th>Hoeveelheid gasten</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($guests as $guest)
                <tr>
                    <td>{{ $guest->id }}</td>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->age }}</td>
                    <td>{{ $guest->amount }}</td>
                    <td>
                        <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('guests.destroy', $guest->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
