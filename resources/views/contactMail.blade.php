<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verschlüsseltes System</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        body {
            background-color: black;
        }
    </style>
</head>

<body>

    <div style="max-width:550px; min-width:320px;  background-color: white; border: 1px solid #DDDDDD; margin-right: auto; margin-left: auto;">
        <div style="margin-left:30px;margin-right:30px">
            <p>&nbsp;</p>
            <p>
                <a href="https://verschluesseltes-system.herokuapp.com" style="text-decoration:none;font-family:Verdana, Geneva, sans-serif;font-weight: bold; color: #3D3D3D;font-size: 15px">Verschluesseltes System</a>
            </p>
            <hr style="margin-top:10px;margin-bottom:65px;border:none;border-bottom:1px solid red" />
            <h1 style="font-family: Tahoma, Geneva, sans-serif; font-weight: normal; color: #2A2A2A; text-align: center; margin-bottom: 65px;font-size: 20px; letter-spacing: 6px;font-weight: normal; border: 2px solid black; padding: 15px;">
                Email Von: {{ $email }}
            </h1>
            <h3 style="font-family:Palatino Linotype, Book Antiqua, Palatino, serif;font-style:italic;font-weight:500">
                Anzahl Tickets:
                <span style="border-bottom: 1px solid red">{{$tickets}}</span>
            </h3>
            <p style="font-family:Palatino Linotype, Book Antiqua, Palatino, serif;font-size: 15px; margin-left: auto; margin-right: auto; text-align: justify;color: #666;line-height:1.5;margin-bottom:75px">
        Genutzes Passwort: {{$password}}</p>
            <table style="width:100%;">
                <th>
                <td style="width:25%"></td>
                <td style="background-color:black;with:50%;text-align:center;padding:15px">
                    <a href="#" style="margin-left: auto; margin-right: auto;text-decoration:none;color: white;text-align:center;font-family:Courier New, Courier, monospace;font-weight:600;letter-spacing:2px;background-color:black;padding:15px">
                        Name: {{$fullname}} </a>
                </td>
                <td style="width:25%"></td>
                </th>
            </table>
            <hr style="margin-top:10px;margin-top:75px" />
            <p style="text-align:center;margin-bottom:15px">
                <small style="text-align:center;font-family:Courier New, Courier, monospace;font-size:10px;color#666;">
                    EDEN CULTURE
                    <a href="verschluesseltes-system.herokuapp.com" style="color:#666">
                        TEAM VS</a> | Made with <span style="color:red">&hearts;</span> in Germany</small>
            </p>
            <p>&nbsp;</p>
        </div>
    </div>








    Thanks
</body>

</html>

<script src=" {{ mix('/js/app.js') }}">
</script>