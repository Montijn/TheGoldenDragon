@extends('website.layouts.website-layout')

@section('content')
    <h1>Edit Schedule</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('schedules.update', $schedule->id) }}">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="user_id" class="form-label">Medewerker</label>
            <select class="form-select" name="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @if($user->id === $schedule->user_id) selected @endif>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="table_id" class="form-label">Tafel</label>
            <select class="form-select" name="table_id">
                @foreach($tables as $table)
                    <option value="{{ $table->id }}" @if($table->id === $schedule->table_id) selected @endif>{{ $table->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Start Datum</label>
            <input type="date" class="form-control" name="date" value="{{ $schedule->date }}" required>
        </div>

        <div class="mb-3">
            <label for="start_time" class="form-label">Start Tijd</label>
            <input type="time" class="form-control" name="start_time" value="{{ $schedule->start_time }}" required>
        </div>

        <div class="mb-3">
            <label for="end_time" class="form-label">Eind Tijd</label>
            <input type="time" class="form-control" name="end_time" value="{{ $schedule->end_time }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Update Schedule</button>
    </form>
@endsection
