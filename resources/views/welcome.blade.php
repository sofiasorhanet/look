<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-family: fantasy;
                color: tomato;
                background-color: aquamarine;
            }
            .top-left > a {
                color: #636b6f;
                background-color: aqua;
                padding: 15px;
                font-size: 13px;
                margin: 1rem;
                font-weight: 600;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

            }
            .links > a {
                color: #636b6f;
                background-color: aqua;
                padding: 15px;
                font-size: 13px;
                margin: 1rem;
                font-weight: 600;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a  href="{{ url('/home') }}">Home</a>
                    @else
                        <a  href="{{ route('login') }}">Inicio Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            
            <div class="content">
                <div class="title m-b-md">
                    Look, Cine en Casa!
                </div>
                <div class="top-left">
                    <a href="/actores">Actores</a>
                    <a href="/peliculas">Peliculas</a>
                </div>

                <div class="links">
                    
                    <a href="https://facebook.com/docs">Facebook</a>
                    <a href="https://twiter.com">Twiter</a>
                    <a href="https://instagram.com">Instagram</a>
                    
                    
                </div>
            </div>
        </div>
    </body>
</html>