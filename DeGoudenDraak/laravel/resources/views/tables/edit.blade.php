@extends('website.layouts.website-layout')
@section('content')
    <div class="container">
        <h2>Edit Table</h2>

        <form action="{{ route('tables.update', $table->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="seats">Zitplaatsen:</label>
                <input type="number" class="form-control" id="seats" name="seats" value="{{ $table->seats }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
