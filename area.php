<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>



    <link
        href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="assetisdiretoria/vendor/aos/aos.css" rel="stylesheet">
    <link href="assetisdiretoria/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetisdiretoria/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assetisdiretoria/css/area.css" rel="stylesheet">


</head>
<style>
    .tituloarea {
        color: white !important;
        text-transform: uppercase;
    }

    .box-geral-area div.box-area h3:before {
        content: "";
        position: absolute;
        border-bottom: 3px solid white;
        width: 600px;
        left: -200px;
        bottom: 0
    }

    .box-geral-area div.box-area h3 {
        padding-left: 120px;
        padding-bottom: 6px;
        font-size: 25px;
        color: var(--cor-primaria);
        line-height: 42px;
        position: relative;
    }

    @media only screen and (max-width: 600px) and (min-width: 200px) {



        .box-geral-area div.box-area h3 {

            font-size: 18px;
            padding: 0;
            width: 100vw;
            padding-left: 24px;
        }

        .box-geral-area div.box-area h3:before {
            content: "";
            position: absolute;
            border-bottom: 3px solid white;
            width: 90vw;
            left: 0;
            bottom: 0;

        }
    }

    .espacamentocima {
        margin-top: 70px;
    }

    .espacamentobaixo {
        margin-bottom: 70px;
    }
</style>

<body>


    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg ">
            <div class="container" data-aos="fade-up">


                <div class="box-geral-area">
                    <div class="box-area">
                        <h3 style="color: white">ÁREAS DE ATUAÇÃO</h3>
                    </div>
                    
                    <div class="row espacamentocima">
                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-minecart"></i>
                                <h4>MINERAÇÃO </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-droplet-half"></i>

                                <h4>ÓLEO E GÁS</h4>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-cone-striped"></i>
                                <h4>INFRAESTRUTURA </h4>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="fas fa-industry" style="margin-top: 20px;"></i>
                                <h4>INFRAENERGIA SIDERURGIA</h4>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="fa-solid fa-fire-flame-curved" style="margin-top: 20px;"></i>
                                <h4>USINAS DE AÇÚCAR E ÁLCOOL</h4>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="fa-regular fa-newspaper" style="margin-top: 20px;"></i>
                                <h4 id=>CELULOSE E PAPEL CIMENTEIRAS</h4>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="fa-regular fa-building" style="margin-top: 20px;"></i>
                                <h4>CONSTRUÇÃO CÍVIL DE GRANDE MASSA (UHE/PCH)</h4>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div>
                                    <i class="fa-solid fa-ship"></i>
                                    <h4>PORTUÁRIO</h4>

                                </div>
                            </div>

                        </div>

                    </div>
        </section><!-- End Services Section -->



        <div style="padding: 30px;"></div>



        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assetisdiretoria/js/main.js"></script>

</body>

<?php

include('footer.php');

?>

</html>