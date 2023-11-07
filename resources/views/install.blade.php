<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        <style>
        </style>
        <title>Gaming Island</title>
    </head>
    <body class="container" style="background-color: black;">
        @include('includes\header')
        <div class="d-flex flex-column align-items-center text-white">
            <h2>Como Instalar ?</h2>
            <img src="images/install.png" alt="how">
            <h2>Baixar jogos</h2>
            <p>Para baixar algum jogo em nosso site clique no botão vermelho <strong>Baixar</strong>. Veja o exemplo na imagem:</p>
            <img src="images/download.png" alt="download">
            <p clas="my-3">Depois disso na pagina que abriu role até em baixo e clique em:</p>
            <img src="images/cliqueaqui.png" alt="Clique Aqui">
            <p clas="my-3">Aguarde os 10 segundos</p>
            <img src="images/10segundos.png" alt="10 segundos">
            <p clas="my-3">E então clique em <strong>Obter Link</strong></p>
            <img src="images/ready.png" alt="Ready">
            <h5 clas="my-3">Após isso irá abrir a pagina com o arquivo correspodente.</h5>
        </div>
        @include('includes\footer') <!-- Incluindo o cabeçalho -->
    </body>
</html>


