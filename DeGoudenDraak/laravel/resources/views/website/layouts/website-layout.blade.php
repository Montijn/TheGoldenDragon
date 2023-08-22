<html>
<head>
    <title>De Gouden Draak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/website/website-global.css') }}">
</head>
<body class="page-body">
    <div class="page-content mx-auto jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-inline-flex justify-content-start">
                    <img class="img-small" src="{{URL::asset('pictures/dragon-small.png')}}">
                    <p class="styled-text h2">De Gouden Draak</p>
                    <img class="img-small img-reverse" src="{{URL::asset('pictures/dragon-small.png')}}">
                </div>
                <div class="col-lg-4 container-fluid banner justify-content-center">
                    <p class="banner-text">Welkom bij De Gouden Draak</p>
                </div>
                <div class="col-lg-4 d-inline-flex justify-content-end">
                    <img class="img-small" src="{{URL::asset('pictures/dragon-small.png')}}">
                    <p class="styled-text h2">De Gouden Draak</p>
                    <img class="img-small img-reverse" src="{{URL::asset('pictures/dragon-small.png')}}">
                </div>
            </div>
            <div class="main-content row p-4 justify-content-center">
                <div class="row container-fluid mx-4">
                    <div class="row justify-content-center mx-3">
                        <div class="col-lg-2">
                            <img class="img-medium" src="{{URL::asset('pictures/dragon-large.png')}}">
                        </div>
                        <div class="col-lg-5 container-fluid row">
                            <div class="row text-center">
                                <p class="h3">Chinees Indische Specialiteiten</p>
                                <br>
                                <p class="h2">De Gouden Draak</p>
                            </div>
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn btn-secondary">Menukaart</button>
                                <button type="button" class="btn btn-secondary">Nieuws</button>
                                <button type="button" class="btn btn-secondary">Contact</button>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <img class="img-medium img-reverse" src="{{URL::asset('pictures/dragon-large.png')}}">
                        </div>
                    </div>
                    <div>
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
