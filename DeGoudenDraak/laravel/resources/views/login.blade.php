@extends('layouts.layout')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @if(!Auth::user())
        <div id="loginDiv">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="E-mail"><br>
                <input type="password" name="password" placeholder="Wachtwoord"><br>
                <input type="submit" value="inloggen"><br>
            </form>
        </div>
    @endif
@endsection

