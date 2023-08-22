<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Menu De Gouden Draak</title>
    </head>

    <body>
        <table>
            <thead>
            <tr>
                <th>Nummer</th>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Prijs</th>
            </tr>
            </thead>

            <tbody>
            @foreach($dishes as $dish)
                <tr>
                    <td>{{$dish->menu_code}}{{$dish->menu_code_addition}}</td>
                    <td>{{$dish->name}}</td>
                    <td>{{$dish->description}}</td>
                    <td>{{round($dish->price, 2)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
<style type="text/css">
    /* Center tables for demo */
    table {
        margin: 0 auto;
    }

    /* Default Table Style */
    table {
        color: #333;
        background: white;
        border: 1px solid grey;
        font-size: 12pt;
        border-collapse: collapse;
    }
    table thead th,
    table tfoot th {
        color: #777;
        background: rgba(0,0,0,.1);
    }
    table caption {
        padding:.5em;
    }
    table th,
    table td {
        padding: .5em;
        border: 1px solid lightgrey;
    }
</style>
