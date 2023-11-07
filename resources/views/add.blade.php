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
        @if (session('success'))
            <div class="alert alert-success" style="text-align:center; color: green; font-size: 1.5rem; font-weight: 900;">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex flex-column align-items-center text-white">
            <form method="POST" action="{{ route('game.store') }}" class="d-flex flex-column align-items-center text-white">
                @csrf    
                <h1>Insira as Infmações do Jogo</h1>
                <label>Titulo</label>
                <input type="text" name="title" id="title" required placdeholder="TITULO DO JOGO" >
                
                <label>Link</label>
                <input type="text" name="link" id="link" required placdeholder="Link do Jogo" >
                
                <label>Descrição</label>
                <input type="text" name="description" id="description" required placdeholder="Descrição do Jogo" >
                
                <label>Tamanho</label>
                <input type="text" name="tamanho" id="tamanho" required placdeholder="Tamanho do jogo" >
                
                <label>Requisitos Minimos</label>
                <input type="text" name="requisitos" id="requisitos" required placdeholder="Requisitos do jogo" >
                
                <label>Thumb</label>
                <input type="text" name="thumb" id="thumb" placdeholder="Thumb.png" >

                <label>Senha</label>
                <input type="text" name="senha" id="senha" placdeholder="Senha do winrar" >
        
                <button type="submit" class="my-3">Adicionar Jogo</button>
                <a href="/" style="color:white; padding: 10px; background-color:black; text-align:center; text-decoration:none; ">Voltar</a>
            </form>
        </div>
        @include('includes\footer') <!-- Incluindo o cabeçalho -->
    </body>
</html>


