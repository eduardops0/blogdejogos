<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        <title>Gaming Island</title>
    </head>
    <body class="container" style="background-color: black;">
    <div class="container">
    <div class="d-flex flex-column align-items-center my-4">
        <div class="">
            <img src="../images/logo.png" alt="logo">
        </div>
        <div class="d-flex">
            <a class="text-decoration-none text-white m-4 header-links" href="/">HOME</a>
            <a class="text-decoration-none text-white m-4 header-links" href="#">TRADUÇÕES</a>
            <a class="text-decoration-none text-white m-4 header-links" href="/howtoinstall">COMO INSTALAR?</a>
            <a class="text-decoration-none text-white m-4 header-links" href="/dmca">INFO/DMCA</a>
        </div>
        <hr>
    </div>
</div>
        <div class="d-flex search-container justify-content-center">
            <form action="{{ route('game.search') }}" method="GET">
                <input class="" type="text" placeholder="Nome do Jogo..." name="search" style="width: 215px;">
                <button type="submit" style="background: none;"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></i></button>
            </form>
        </div>
        <div class="d-flex flex-column align-items-center">
            <h3 class="text-white">Resultado da busca:</h3>
        </div>
        <div class="row">
            <div class="row row-cols-2 align-items-start">
                @foreach($games as $game)
                     <div class="col my-2">
                        <a href="{{route('game.info', ['title' => $game->url]) }}"><img src="games/<?php echo $game['url']?>/thumb.png" alt="thumb" ></a>
                    </div>
                @endforeach
            </div>
        </div>
        @include('includes\footer') <!-- Incluindo o cabeçalho -->
        <script src="https://kit.fontawesome.com/ba3696a46c.js" crossorigin="anonymous"></script>
    </body>
</html>


