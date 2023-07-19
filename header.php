<?php include('valida_tela.php'); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOLD - Qualidade em Transporte Pesados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="servico.css">
    <link rel="stylesheet" href="contato.css">
    <link rel="stylesheet" href="style.css">

</head>


<style>
    header {
        z-index: 999999;
    }

</style>

<body>

    <?php

    $mobile = detectar_dispositivo();
    if ($mobile != true) { ?>


        <header>
            <div class="topbar">
                <div class="LOGOS">
                    <a href="index.php">
                        <img src="imagens/logo-quadrada-vermelha.png" alt=""></a>
                </div>
                <div class="social-icons">

                    <a href="https://www.instagram.com/hold.transporte/?hl=en" target="_blank" title="instagram">
                        <i class="fa-brands fa-instagram social"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/holdtransportepesado" target="_blank" title="linkedin">
                        <i class="fa-brands fa-linkedin-in social"></i>
                    </a>
                    <a href="https://www.facebook.com/hold.transporte/" target="_blank" title="facebook">
                        <i class="fa-brands fa-facebook-f social"></i>
                    </a>

                </div>
            </div>



            <div class="nav-bar">
                <div class="navbar-links">
                    <a href="institucional.php" class="navbarlinks">A EMPRESA</a>
                    <a href="servicos.php" class="navbarlinks">SERVIÇOS</a>
                    <a href="area.php" class="navbarlinks">ÁREAS DE ATUAÇÃO</a>
                    <a href="galeria.php" class="navbarlinks">GALERIA</a>
                    <a href="index.php#contact" class="navbarlinks">CONTATO</a>
                    <a href="https://www.sisgen.fmrtecnologia.com.br/tracking/appTK_Login/" class="navbarlinks"
                        target="_blank">ÁREA DO CLIENTE</a>
                </div>
            </div>

        </header>


    <?php } else {
        include('headermobile.php') ?>



        <?php ;
    } ?>