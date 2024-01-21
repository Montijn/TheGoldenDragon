@extends('website.layouts.website-layout')

@section('content')
    <div class="container mt-5">
        <h2>Vraag om hulp</h2>
        <form method="POST" action="{{ route('notification.store') }}">
            @csrf
            <div class="mb-3">
                <label for="table_id" class="form-label">Selecteer je tafelnummer:</label>
                <select class="form-select" name="table_id" id="table_id" required>
                    @foreach ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->id }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Vraag hulp</button>
        </form>
    </div>
@endsection
