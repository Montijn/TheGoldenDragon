@extends('website.layouts.website-layout')

@section('content')
    <div class="container">
        <h2>Create Table</h2>

        <form action="{{ route('tables.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="seats">Seats:</label>
                <input type="number" class="form-control" id="seats" name="seats" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
