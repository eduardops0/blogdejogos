<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900&family=Poppins:wght@900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <title>Gaming Island</title>
        <style>
            .recentes {
                font-family: 'Jost', sans-serif;
            }
        </style>
    </head>
    <body class="container" style="background-color: black;">
        @include('includes\header') <!-- Incluindo o cabeçalho -->
        <div class="contain">
            <div class="d-flex search-container justify-content-center">
                <form action="{{ route('game.search') }}" method="GET">
                    <input class="" type="text" placeholder="Nome do Jogo..." name="search" style="width: 215px;">
                    <button type="submit" style="background: none;"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></i></button>
                </form>
            </div>
            <div class="row justify-content-center">
                
                <div class="row m-2">
                    <div><h3 class="text-white recentes">Destaques <i class="fa-solid fa-ranking-star" style="color: #ff0000;"></i></h3></div>
                    <!-- @foreach($games as $game)
                        <div class="col my-2">
                            <a href="{{route('game.info', ['title' => $game->url]) }}"><img src="games/<?php echo $game['url']?>/thumb.png" alt="thumb" ></a>
                        </div>
                    @endforeach -->
                </div>
                <div class="row">
                    <div><h3 class="text-white recentes">Jogos Recentes <i class="fa-regular fa-square-plus" style="color: #ff0000;"></i></h3></div>
                    <div class="row row-cols-2 align-items-start">
                        @foreach($games as $game)
                            <div class="col my-2">
                                <a href="{{route('game.info', ['title' => $game->url]) }}"><img src="games/<?php echo $game['url']?>/thumb.png" alt="thumb" style="filter: drop-shadow(0px 1px 7px #FFFFFF);" ></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('includes\footer') <!-- Incluindo o cabeçalho -->
        <script src="https://kit.fontawesome.com/ba3696a46c.js" crossorigin="anonymous"></script>
    </body>
</html>
