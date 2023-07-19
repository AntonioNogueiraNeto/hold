<?php
include('header.php')

; ?>

<!DOCTYPE html>
<html lang="en">


<style>
    .galeriabg {
        margin-top: 70px;
    }

    body {
        background-color: white !important;
    }


    .titulo-principal2 {
        font-family: 'Georama', sans-serif !important;
        font-size: 46px;
        text-align: center;
        padding-bottom: 0;
        margin: 40px;
    }

    .titulo-principal-cor2 {
        color: #eb3f28;
        font-weight: bold;
    }



    .image2 {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .gallery-image2 {
        margin: 0 20px;
        text-align: center;
        column-count: 3;
        column-gap: 10px;
        column-width: 200px;
    }

    @media (max-width: 820px) {
        .gallery-image2 {
            margin: 0 20px 20px 20px;
        }
    }

    @media (max-width: 820px) {


        .gallery-container2 {
            margin-left: 0px;
        }
    }

    .popup2 {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999999;
        overflow: hidden;
        transition: 1s;
        opacity: 0;
    }

    .popup2.active {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }

    .popup2.active .close-btn2,
    .popup2.active .image-name2,
    .popup2.active .index2,
    .popup2.active .large-image2,
    .popup2.active .arrow-btn2,
    .popup2.active .top-bar2 {
        opacity: 1;
        transition: opacity .5s;
        transition-delay: 1s;
    }


    .top-bar2 {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background-color: #000;
        color: #FFF;
        text-align: center;
        line-height: 20px;
        font-weight: 300;
    }

    .image-name2 {
        opacity: 0;
    }

    .close-btn2 {
        opacity: 0;
        position: absolute;
        top: 15px;
        right: 20px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        cursor: pointer;
    }

    .arrow-btn2 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 10px;
        border-radius: 50%;
        border: none;
        background: none;
        cursor: pointer;
        opacity: 0;
    }

    .left-arrow2 {
        left: 10px;
    }

    .right-arrow2 {
        right: 10px;
    }

    .arrow-btn2:hover {
        opacity: 100;
        -webkit-transition: opacity 0.6s;
        -moz-transition: opacity 0.6s;
        -o-transition: opacity 0.6s;
        transition: opacity 1s;
    }

    .index2 {
        position: absolute;
        bottom: 50px;
        right: 10px;
        font-size: 40px;
        font-weight: 100;
        color: rgba(255, 255, 255, 0.4);
        opacity: 0;
    }

    .large-image2 {
        margin-top: 5%;
        width: 80%;
        height: 80%;
        object-fit: contain;
        opacity: 0;
    }


    .box-geral-galeria div.box-galeria h3:before {
        content: "";
        position: absolute;
        border-bottom: 3px solid var(--cor-primaria);
        width: 250px;
        left: 0;
        bottom: 0
    }

    .box-geral-galeria div.box-galeria h3 {
        padding-left: 120px;
        padding-bottom: 6px;
        font-size: 25px;
        color: var(--cor-primaria);
        line-height: 42px;
        position: relative;
    }

    @media only screen and (max-width: 600px) and (min-width: 200px) {



        .box-geral-galeria div.box-galeria h3 {

            font-size: 18px;
            padding: 0;
            width: 100vw;
            padding-left: 24px;
        }

        .box-geral-galeria div.box-galeria h3:before {
            content: "";
            position: absolute;
            border-bottom: 3px solid var(--cor-primaria);
            width: 90vw;
            left: 0;
            bottom: 0;

        }
    }
</style>


<div class="galeriabg">

    <div class="box-geral-galeria">
        <div class="box-galeria">
            <h3>GALERIA</h3>
        </div>



    </div>
    <!-- pop up -->
    <div class="popup2">
        <div class="top-bar2">
            <p class="image-name2"></p>
            <span class="close-btn2"><img src="imagens/lightbox2/close.png" alt=""></span>
        </div>
        <!-- arrows -->
        <button class="arrow-btn2 left-arrow2"><img src="imagens/lightbox2/prev.png" alt=""></button>
        <button class="arrow-btn2 right-arrow2"><img src="imagens/lightbox2/next.png" alt=""></button>
        <!-- image -->
        <img src="images/frotadetalhes/onibusrodoviario1.jpg" class="large-image2" alt="">

        <!-- image index -->
        <h1 class="index2">01</h1>


    </div>

    <?php
    function generateGallery2($directory)
    {
        $html = '<div class="gallery2 espacamentocima"style="margin-top: 100px" >';
        $html .= '<div class="gallery-image2">';

        $imagePaths = glob($directory . '/*.*');

        foreach ($imagePaths as $imagePath) {
            $html .= '<img src="' . $imagePath . '" class="image2" alt="">';
        }

        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

    $directory = 'GALERIA';

    $imageGallery = generateGallery2($directory);

    echo '<div id="image-gallery-container">' . $imageGallery . '</div>';
    ?>


</div>
<script src="app.js"></script>


<?php

include('footer.php'); ?>