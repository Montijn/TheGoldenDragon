@extends('website.layouts.website-layout')

@section('content')
    <div id="app">
        <favorite-menu-items :favorite-menu-items="{{ $favoriteMenuItems }}"></favorite-menu-items>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
@endsection
