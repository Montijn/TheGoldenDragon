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
                <th>Number</th>
                <th>Table</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notifications as $notification)
                <tr>
                    <td>{{ $notification->id }}</td>
                    <td>{{ $notification->table_id }}</td>
                    <td>{{ $notification->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
