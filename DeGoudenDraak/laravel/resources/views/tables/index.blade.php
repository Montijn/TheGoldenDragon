@extends('website.layouts.website-layout')
@section('content')
    <div class="container">
        <h2>Tables</h2>
        <a href="{{ route('tables.create') }}" class="btn btn-primary mb-3">Nieuwe Tafel</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>Tafelnummer</th>
                <th>Zitplaatsen</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tables as $table)
                <tr>
                    <td>{{ $table->id }}</td>
                    <td>{{ $table->seats }}</td>
                    <td>
                        <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tables.destroy', $table->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Verwijder</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
