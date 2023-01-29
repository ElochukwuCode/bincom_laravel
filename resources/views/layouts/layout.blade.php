<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 10px;
            }
            .main_div {
                display: grid;
                place-items: center;
            }
            .fm-chk {
                margin-right: 15px;
            }
            .btn-sub {
               margin-top:15px; 
            }
            nav {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #6c757d
            }
            footer{
                display: grid;
                place-items: center;
            }
            .mssg {
                color:red;
                /* border: 2px solid black;
                border-radius: 10px; */
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <nav>
        <h3>Bincom Polls</h3>        
        <div class="nav-div">
            <a href="/"><button class="btn btn-secondary">HOME</button></a>
            <a href="/lga"><button class="btn btn-info">LGAs</button></a>
            <a href="/polling_units"><button class="btn btn-danger">POLLING UNITS</button></a>
            <a href="/new_poll"><button class="btn btn-success">NEW POLL</button></a>
        </div>        
    </nav>
    <body class="antialiased">
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    <br><br><br><br>
    <footer>
        Copyright &copy Bincom 2023
    </footer>
</html>
