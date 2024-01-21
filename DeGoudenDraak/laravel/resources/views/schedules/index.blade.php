@extends('website.layouts.website-layout')

@section('content')
    <h1>Planning</h1>

    <a href="{{ route('schedules.create') }}" class="btn btn-primary">Maak Planning</a>

    <table class="table">
        <thead>
        <tr>
            <th>Gebruiker</th>
            <th>Tafel</th>
            <th>Datum</th>
            <th>Start tijd</th>
            <th>Eind tijd</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($schedules as $schedule)
            <tr>
                <td>{{ $schedule->id }}</td>
                <td>{{ $schedule->user->name }}</td>
                <td>{{ $schedule->table->id }}</td>
                <td>{{ $schedule->date }}</td>
                <td>{{ $schedule->start_time }}</td>
                <td>{{ $schedule->end_time }}</td>
                <td>
                    <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
