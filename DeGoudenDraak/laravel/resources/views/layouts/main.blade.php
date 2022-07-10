<!doctype html>
<html>
<head>
    <title>The Golden Dragon</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    body {background-color: darkred; margin: 15px; margin-left: 50px; margin-right: 50px}
    td {padding: 0px;}

    @font-face {
        font-family: 'chinese_takeawayregular';
        src: url('../fonts/chinesetakeaway-webfont.woff2') format('woff2'),
        url('../fonts/chinesetakeaway-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    a {text-decoration: none;
        color: yellow;}
</style>
<body>
    <div class="navbar">
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="{{Route("home")}}" >Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route("news")}}" >News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route("news")}}" >Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route("contact")}}" >Contact</a>
            </li>
        </ul>
    </div>

    <div class="row col-md-12">
        <div class="col-md-4">
            <img class="col-md-3" src="{{asset('./pictures/dragon-small.png')}}">
            <span class="col-md-3" style="font-family:'chinese_takeawayregular'">De Gouden Draak</span>
            <img class="col-md-3" src="{{asset('./pictures/dragon-small-flipped.png')}}">
        </div>

        <div class="col-md-4">
            <marquee behavior="scroll" direction="left">
                Welkom bij De Gouden Draak. Klik op deze tekst om de aanbiedingen van deze week te zien!
            </marquee>
        </div>

        <div class="col-md-4">
            <img class="col-md-3" src="{{asset('./pictures/dragon-small.png')}}">
            <span class="col-md-3" style="font-family:'chinese_takeawayregular'">De Gouden Draak</span>
            <img class="col-md-3" src="{{asset('./pictures/dragon-small-flipped.png')}}">
        </div>
    </div>

    <div class="row col-md-12">

    </div>
{{--<table id="main_table" style="padding:5px;width:100%;border-collapse: collapse">
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
            <!-- CONTENT HERE! -->
            <table width=100%>
                <tr>
                    <td colspan='3'>
                        <p>
                            <img src="../pictures/dragon-small.png" style="float:left;height:200px" alt="Golden Dragon">
                            <img src="../pictures/dragon-small-flipped.png" style="float:right;height:200px" alt="Golden Dragon">
                            <span style="font-size:40px;font-weight:bold;color:yellow">Chinees Indische Specialiteiten</span><br>
                            <span style="font-size:50px;font-weight:bold;color:yellow">De Gouden Draak</span><br>
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
                    <td align="center" style='border:1px solid black;background:floralwhite'>
                        @yield("content")
                    </td>
                </tr>
            </table>
            <br>
            <div text-align="center"><a href="contact_new.html">Naar Contact</a></div>
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
</table>--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
