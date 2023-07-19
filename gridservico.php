<!DOCTYPE html>
<html>

<head>
    <link
        href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .card-container-services {
        font-family: 'Georama';
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .card {
        display: grid;
        grid-template-rows: auto 1fr;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
        border-radius: 20px;
        -webkit-box-shadow: 20px 15px 31px -17px rgba(0, 0, 0, 0.35);
        -moz-box-shadow: 20px 15px 31px -17px rgba(0, 0, 0, 0.35);
        box-shadow: 20px 15px 31px -17px rgba(0, 0, 0, 0.35);
    }

    .card-img {
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        /* Mantém a proporção 16:9 */
        position: relative;
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    .card .title-services {
        padding: 25px;
        text-align: center;
        background-color: #fcfcfc;
        color: #313030;
        font-weight: bold;
        font-size: 16px !important;
    }

    @media only screen and (max-width: 600px) {
        .card-container-services {
            grid-template-columns: 1fr;
        }
    }


    #servicos {
        padding-top: 40px;

        background-color: rgba(240, 239, 239, 0.1);
        position: relative;
        font-size: 25px;
    }

    .box-geral-esquerdaservico div.box-textoservico h3:before {
        content: "";
        position: absolute;
        border-bottom: 3px solid var(--cor-primaria);
        width: 300px;
        left: 0;
        bottom: 0
    }

    .box-geral-esquerdaservico div.box-textoservico h3 {
        padding-left: 120px;
        padding-bottom: 6px;
        font-size: 25px;
        color: var(--cor-primaria);
        line-height: 42px;
        position: relative;
    }

    @media only screen and (max-width: 600px) and (min-width: 200px) {



        .box-geral-esquerdaservico div.box-textoservico h3 {

            font-size: 18px;
            padding: 0;
            width: 100vw;
            padding-left: 24px;
        }

        .box-geral-esquerdaservico div.box-textoservico h3:before {
            content: "";
            position: absolute;
            border-bottom: 3px solid var(--cor-primaria);
            width: 90vw;
            left: 0;
            bottom: 0;

        }
    }
</style>

<body>

    <section id="servicos">
        <section class="informacoes">
            <div class="box-geral-esquerdaservico">
                <div class="box-textoservico">
                    <h3>SERVIÇOS</h3>
                </div>
                <div class="subtitulo">
                    <p>Pode contar conosco, de norte a sul, de leste a oeste, dentro de todo o
                        território brasileiro, para transportar qualquer que seja a sua necessidade de carga e
                        logística.
                    </p>
                </div>



            </div>



            <div class="card-container-services  espacamentocima espacamentobaixo ">
                <div class="card">
                    <div class="card-img">
                        <img src="servicos/transporte.jpg" alt="Imagem 4">
                    </div>
                    <div class="title-services">Transporte de cargas excedentes</div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="servicos/civil.jpg"
                            alt="Imagem 5">

                    </div>

                    <div class="title-services">Transporte de máquinas e equipamentos de construção civil</div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="assets/servicos/foto2.jpg" alt="Imagem 6">
                    </div>

                    <div class="title-services">
                        Transporte de cargas do setor industrial e mineração
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="servicos/muck.jpg" alt="Imagem 1">
                    </div>
                    <div class="title-services">Locação de Munck</div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="servicos/logistica.jpg" alt="Imagem 2">
                    </div>
                    <div class="title-services">Serviços gerais de logística</div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="servicos/terceirao.jpg" alt="Imagem 3">
                    </div>
                    <div class="title-services">Terceirização de frota</div>
                </div>
            </div>

        </section>

        <div class=" subcenter">
            <p>Confie em nossa qualidade e comprove a excelência de nossos serviços.<br> Solicite um orçamento
                personalizado!
            </p>
        </div>


        <div class="sobrenos degrade">
            <a href="mailto:contato@holdtransportepesado.com.br"
                class="button butaosobrenos butaosobrenosdegrade">ENTRAR EM CONTATO</a>

        </div>

    </section>
</body>

</html>