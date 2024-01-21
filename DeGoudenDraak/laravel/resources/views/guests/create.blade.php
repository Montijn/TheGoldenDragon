@extends('website.layouts.website-layout')

@section('content')
    <div class="container">
        <h2>Create Guest</h2>
        <form method="POST" action="{{ route('guests.store') }}">
            @csrf
            <div class="form-group">
                <label for="table_id">Table:</label>
                <select name="table_id" class="form-control">
                    @foreach ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount">Hoeveelheid gasten:</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Guest</button>
        </form>
    </div>
@endsection
