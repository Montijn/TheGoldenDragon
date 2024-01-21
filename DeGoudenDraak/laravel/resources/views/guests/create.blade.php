@extends('website.layouts.website-layout')

@section('content')
    <div class="container">
        <h2>Maak gast aan</h2>
        <form method="POST" action="{{ route('guests.store') }}">
            @csrf
            <div class="form-group">
                <label for="table_id">Tafel:</label>
                <select name="table_id" class="form-control">
                    @foreach ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Leeftijd:</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount">Hoeveelheid gasten:</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Sla op</button>
        </form>
    </div>
@endsection
