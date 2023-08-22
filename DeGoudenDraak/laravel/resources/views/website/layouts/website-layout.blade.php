<html>
<head>
    <title>De Gouden Draak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/website/website-global.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <div>
            <div class="col-lg-4 d-inline-flex justify-content-start">
                <img class="img-small" src="{{URL::asset('pictures/dragon-small.png')}}">
                <p class="styled-text h2">De Gouden Draak</p>
                <img class="img-small img-reverse" src="{{URL::asset('pictures/dragon-small.png')}}">
            </div>
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bestellen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
            <a href="/login">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </a>
    </div>

</nav>
<table id="main_table" style="padding:5px;width:100%;border-collapse: collapse">
    <tr style="height:7px;background-color:red">
        <td colspan="9">
        </td>
    <tr>
    <tr style="height:25px;background-color:red">
        <td width="7px">
        </td>
        <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="border-top:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
        <td width="7px">
    </tr>
    <tr style="height:25px;background-color:red">
        <td width="7px">
        <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td width="7px">
    </tr>
    <tr style="height:25px;background-color:red">
        <td width="7px">
        <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px"></td>
        <td></td>
        <td style="width:25px"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border-bottom:4px solid yellow"></td>
        <td width="7px">
    </tr>
    <tr style="height:50px;background-color:red">
        <td width="7px">
        <td style="width:25px;border-right:4px solid yellow;border-left:4px solid yellow"></td>
        <td style="width:25px;"></td>
        <td style="width:25px;"></td>
        <td style="text-align:center">
            <table width=100%>
                <tr>
                    <td colspan='3'>
                        <p>
                            <img src="pictures/dragon-small.png" style="float:left;height:200px" alt="Golden Dragon">
                            <img src="pictures/dragon-small-flipped.png" style="float:right;height:200px"
                                 alt="Golden Dragon">
                            <span style="font-size:40px;font-weight:bold;color:yellow;justify-content:center;display:flex;">Chinees Indische Specialiteiten</span><br>
                            <span style="font-size:50px;font-weight:bold;color:yellow;justify-content:center;display:flex;">De Gouden Draak</span><br>
                        </p>
                    </td>
                </tr>
                <tr style="padding-top:50px">
                    <td colspan="3" height="50px">
                    </td>
                </tr>
                <tr style="padding-top:50px">
                    <td width="50px">
                    </td>
                    <td align="center" style='border:1px solid black; background:floralwhite; height: 450px'><br>
                        @yield("content")
                    </td>
                    <td width="50px">
                    </td>
                </tr>
            </table>
            <br>
        </td>
        <td style="width:25px;"></td>
        <td style="width:25px;"></td>
        <td style="width:25px;border-right:4px solid yellow;border-left:4px solid yellow"></td>
        <td width="7px">
    </tr>
    <tr style="height:25px;background-color:red">
        <td width="7px">
        <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px"></td>
        <td></td>
        <td style="width:25px"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border-top:4px solid yellow"></td>
        <td width="7px">
    </tr>
    <tr style="height:25px;background-color:red">
        <td width="7px">
        <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
        <td width="7px">
    </tr>
    <tr style="height:25px;background-color:red">
        <td width="7px">
        </td>
        <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow"></td>
        <td style="border-top:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border-left:4px solid yellow;"></td>
        <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
        <td width="7px">
    </tr>
    <tr style="height:7px;background-color:red">
        <td colspan="9">
        </td>
    <tr>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>
