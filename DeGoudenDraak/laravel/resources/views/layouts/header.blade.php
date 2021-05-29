<div id='menuBar'>
    <img id="logo"  src="{{asset('pictures/goodpay.png')}}" alt="goodpay logo">
    <div id='buttonBar'>
        @if(Auth::user())
            <div class="list-inline-item">
                <button id='cashDeskBtn' class='menuButton'>
                    Kassa
                </button>
            </div>
            <div class="list-inline-item">
                <button id='menuBtn' class='menuButton'>
                    Gerechten
                </button>
            </div>
            <div class="list-inline-item">
                <button id='salesBtn' class='menuButton'>
                    Verkoop Overzicht
                </button>
            </div>
            <div class="list-inline-item">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="menuButton">Uitloggen</button>
                </form>
            </div>
        @endif
    </div>
</div>
