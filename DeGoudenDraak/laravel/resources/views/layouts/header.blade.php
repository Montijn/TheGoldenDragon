<!-- THIS IS A PARTIAL. No <HTML> tags needed -->
<link rel='stylesheet' type='text/css'  href="{{asset('/css/header.css')}}">
<link rel='stylesheet' type='text/css'  href="{{asset('/css/login.css')}}">
<link rel='stylesheet' type='text/css'  href="{{asset('/css/general.css')}}">
<link rel='stylesheet' type='text/css'  href="{{asset('/css/cashDesk.css')}}">
<link rel='stylesheet' type='text/css'  href="{{asset('/css/menu.css')}}">
<link rel='stylesheet' type='text/css'  href="{{asset('/css/sales.css')}}">

<script  src="{{asset('/js/cashDesk.js')}}" defer></script>
<script  src="{{asset('/js/header.js')}}" defer></script>
<script  src="{{asset('/js/sales.js')}}" defer></script>
<script  src="{{asset('/js/main.js')}}" defer></script>

<div id='menuBar'>
    <img id="logo"  src="{{asset('pictures/goodpay.png')}}" alt="goodpay logo">
    <div id='buttonBar'>
        @if(Auth::user())
        <button id='cashDeskBtn' class='menuButton'>
            Kassa
        </button>

        <button id='menuBtn' class='menuButton'>
            Gerechten
        </button>
        <button id='salesBtn' class='menuButton'>
            Verkoop Overzicht
        </button>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="menuButton">Uitloggen</button>
        </form>
        @endif
    </div>
</div>
