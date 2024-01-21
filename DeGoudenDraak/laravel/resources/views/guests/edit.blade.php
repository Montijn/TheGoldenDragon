@extends('website.layouts.website-layout')

@section('content')
    <div class="container">
        <h2>Edit gast</h2>
        <form method="POST" action="{{ route('guests.update', $guest->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="table_id">Tafel:</label>
                <select name="table_id" class="form-control">
                    @foreach ($tables as $table)
                        <option value="{{ $table->id }}" {{ $guest->table_id == $table->id ? 'selected' : '' }}>
                            {{ $table->id }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" name="name" class="form-control" value="{{ $guest->name }}" required>
            </div>
            <div class="form-group">
                <label for="age">Leeftijd:</label>
                <input type="number" name="age" class="form-control" value="{{ $guest->age }}" required>
            </div>
            <div class="form-group">
                <label for="amount">Hoeveelheid gasten:</label>
                <input type="number" name="amount" class="form-control" value="{{ $guest->amount }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Sla op</button>
        </form>
    </div>
@endsection
