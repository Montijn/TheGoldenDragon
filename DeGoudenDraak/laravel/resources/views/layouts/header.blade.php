<div id='menuBar'>
    <img id="logo"  src="{{asset('pictures/goodpay.png')}}" alt="goodpay logo">
    <div id='buttonBar'>
        @if(Auth::user())
            <div class="list-inline-item">
                <form action="{{route('cashdesk.order.create')}}" method="GET">
                    @csrf
                <button id='cashDeskBtn' class='menuButton'>
                    Maak bestelling
                </button>
                </form>
            </div>
            <div class="list-inline-item">
                <form action="{{route('cashdesk.notifications')}}" method="GET">
                    @csrf
                <button id='menuBtn' class='menuButton'>
                    Berichten
                </button>
                </form>
            </div>
            <div class="list-inline-item">
                <form action="{{route('cashdesk.order.index')}}" method="GET">
                    @csrf
                <button id='salesBtn' class='menuButton'>
                    Verkoop Overzicht
                </button>
                </form>
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
