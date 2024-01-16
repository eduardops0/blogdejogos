<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        <style>
            .collapse-button {
                border: none;
                background-color: black;
                color: gray;
                padding: 10px;
                border-radius: 10px 10px 0px 0px;
            }
            .collapse-content {
                display: none;
            }

            .active {
                background-color: #222222;
                color: white;
            }

            .header-links {
        /* font-family: 'Jost', sans-serif; */
        font-family: 'Roboto', sans-serif;
/* font-family: 'Nunito Sans', sans-serif;
font-family: 'Poppins', sans-serif; */
/* font-family: 'Roboto', sans-serif; */
font-weight: 900;
    }
        </style>
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
            <div class="d-flex flex-column align-items-center">
                <h3 class="text-white"><?php echo $game[0]['title'] ?></h3>
                <img src="../games/<?php echo $game[0]['url']?>/thumb.png" alt="thumb">
            </div>
            <div class="d-flex flex-column align-items-center">
                <div class="d-flex text-white">
                     <span class="my-2"><?php echo $game[0]['tamanho'] ?></span>
                </div>
                <a class="btn btn-danger" href="<?php echo $game[0]['link'] ?>" role="button" target="_blank">Baixar</a>
            </div>

            <div class="d-flex">
                <div class="d-flex flex-column">
                    <button class="collapse-button active">DESCRIÇÃO</button>
                </div>
                <div class="d-flex flex-column">
                    <button class="collapse-button">REQUISITOS SISTEMA</button>
                </div>

                <div class="d-flex flex-column">
                    <button class="collapse-button">SCREENSHOTS/GAMEPLAY</button>
                </div>
                
                <div class="d-flex flex-column">
                    <button class="collapse-button">COMO INSTALAR</button>
                </div>
            </div>

            <div class="row">
                <div class="collapse-content text-white" style="background-color: #222222; padding: 10px;">
                    <p><?php echo $game[0]['description'] ?></p>
                </div>
                <div class="collapse-content text-white" style="background-color: #222222; padding: 10px;">
                    <p><?php echo $game[0]['requisitos'] ?></p>
                </div>
                <div class="collapse-content">
                    <div class="row">
                        <img class="my-2" src="../games/<?php echo $game[0]['url']?>/1.jpg" alt="thumb" style="border: white solid 2px;">
                        <img src="../games/<?php echo $game[0]['url']?>/2.jpg" alt="thumb" style="border: white solid 2px;">
                    </div>
                </div>
                <div class="collapse-content text-white" style="background-color: #222222; padding: 10px;">
                    <p> 1. EXTRAIA OS ARQUIVOS EM UMA PASTA<br>
                        2. AGORA É SÓ JOGAR E SE DIVERTIR :)
                    </p>
                </div>
            </div>
        @include('includes\footer')
        <script>
    const collapseButtons = document.querySelectorAll('.collapse-button');
    const collapseContents = document.querySelectorAll('.collapse-content');

    collapseButtons.forEach((button, index) => {
      button.addEventListener('click', () => {
        if (!button.classList.contains('active')) {
          collapseButtons.forEach((btn) => {
            btn.classList.remove('active');
          });
          button.classList.add('active');

          collapseContents.forEach((content) => {
            content.style.display = 'none';
          });

          collapseContents[index].style.display = 'block';
        }
      });
    });

    collapseButtons[0].classList.add('active');
    collapseContents[0].style.display = 'block';
  </script>
    </body>
</html>


