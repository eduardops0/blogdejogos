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
        <div class="d-flex flex-column text-white align-items-center">
            <div>
                <h2>DMCA</h2>
            </div>
            <div class="d-flex flex-column justify-content-center text-align-center">
                <p class="text-center">* O conteúdo publicado aqui tem como objetivo o entretenimento e a diversão. *<br>
                Todos os links e arquivos encontrados neste site estão hospedados na própria internet. Nós, da <strong>Gaming Island</strong>, apenas organizamos e indicamos onde eles podem ser encontrados. Não hospedamos nenhum arquivo ou programa em nosso servidor. Nenhum conteúdo é comercializado e qualquer link P2P (Torrent) é criado por usuários e disponibilizados na web, apenas encontramos esses links e agregamos ao site.
                O site não faz cópias ilegais e nem infringe <strong>Direitos Autorais</strong>. Não nos responsabilizamos pelo uso indevido após o download. Legalmente, de acordo com a <strong>DMCA (Digital Millennium Copyright Act, Lei dos Direitos Autorais do Milênio Digital)</strong>, que é uma lei dos Estados Unidos, é permitido aos provedores de conteúdo em seus sites a isenção de responsabilidade por violação de direitos autorais, caso eles removam prontamente o conteúdo ofensivo após serem notificados de uma suposta violação. Apenas o proprietário dos direitos autorais ou um agente legalmente autorizado pode identificar a sua propriedade e afirmar, sob pena de perjúrio, que o mesmo deve ser retirado.
                Caso o proprietário dos direitos autorais acredite que um conteúdo em nosso site viole seus direitos conforme e Lei de Direitos Autorais dos EUA, deverá ser encaminhado um aviso de retirada com as seguintes informações:
                </p>
            </div>
            <div class="d-flex flex-column">
                <span class="mx-4">
                    1. Apresentar uma assinatura fisica ou eletrônica.<br>
                    2. Apresentar uma descrição da obra cujos direitos autorias foram violados.<br>
                    3. Identificar onde tal obra está localizada no site.<br>
                    4. Especificar informações de contato, como nome, endereço, número de telefone e e-mail.<br>
                    5. Apresentar uma declaração de boa-fé de que o uso que resultou na violação não foi autorizado pelo proprietário dos direitos autorais, seu agente designado ou a legislação.<br>
                    6. Apresentar uma declaração sob pena de perjúrio de que as informações contidas no aviso são precisas e de que o remetente é o proprietário dos direitos autorais ou um agente autorizado a atuar em nome do proprietário.<br>
                </span>
            </div> 
            <div class="d-flex flex-column align-items-center my-5">
                <span class="text-center">PARA O EMAIL:</span>
                <span class="text-center">gamingisland0@gmail.com</span>
            </div>
        </div>
        @include('includes\footer') <!-- Incluindo o cabeçalho -->
    </body>
</html>


