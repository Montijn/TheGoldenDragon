@extends('layouts.layout')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container mt-5">
        <h1>Notifications</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Nummer</th>
                <th>Tafel</th>
                <th>Tijd</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($notifications as $notification)
                <tr>
                    <td>{{ $notification->id }}</td>
                    <td>{{ $notification->table_id }}</td>
                    <td>{{ $notification->created_at }}</td>
                    <td>
                        <form action="{{ route('notification.destroy', $notification->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Geholpen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
