<style>
    .box-geral-esquerdahold22 div.box-textohold22 h3:before {
        content: "";
        position: absolute;
        border-bottom: 3px solid var(--cor-primaria);
        width: 300px;
        left: 0;
        bottom: 0
    }

    .box-geral-esquerdahold22 div.box-textohold22 h3 {
        padding-left: 120px;
        padding-bottom: 6px;
        font-size: 25px;
        color: var(--cor-primaria);
        line-height: 42px;
        position: relative;
    }

    @media only screen and (max-width: 600px) and (min-width: 200px) {



        .box-geral-esquerdahold22 div.box-textohold22 h3 {

            font-size: 18px;
            padding: 0;
            width: 100vw;
            padding-left: 24px;
        }

        .box-geral-esquerdahold22 div.box-textohold22 h3:before {
            content: "";
            position: absolute;
            border-bottom: 3px solid var(--cor-primaria);
            width: 90vw;
            left: 0;
            bottom: 0;

        }
    }
</style>


<section class="hold2022">
    <div class="box-geral-esquerdahold22">
        <div class="box-textohold22">
            <h3>HOLD 2022</h3>
        </div>
        <style>
            .contador {
                color: rgb(84, 84, 84);
                text-align: center;
                font-size: 40px;
                font-weight: bold;
                font-family: 'Georama', sans-serif;
                padding-top: 10px;
                padding-bottom: 10px;
            }
        </style>

        <div class="cardinfosshold ">
            <div class="wrapper">
                <div class="fundo1">
                    <div class="counterconteiner">

                        <div class="contador">
                            <span>+ de </span>
                            <span class="num" data-val="15">0</span>
                        </div>
                        <span class="text">MILHÕES DE KM RODADOS</span>
                    </div>
                    <img class="imgfundo1" src="imagens/fundo1.jpg" alt="">
                    <img class="imgfundo2" src="imagens/fundo2.jpg" alt="">
                </div>
                <div class="fundo2">
                    <div class="counterconteiner counterconteinerboxshadow">

                        <div class="contador">
                            <span>+ de </span>
                            <span class="num" data-val="10">000</span>
                        </div>
                        <span class="text" style="text-align: center;">MIL EMBARQUES</span>
                    </div>
                    <img class="imgfundo3" src="imagens/fundo1.jpg" alt="">
                    <img class="imgfundo4" src="imagens/fundo2.jpg" alt="">
                </div>

                <div class="fundo2">
                    <div class="counterconteiner counterconteinerboxshadow">

                        <div class="contador">
                            <span></span>
                            <span class="num" data-val="271">000</span>
                        </div>
                        <span class="text" style="text-align: center;">MIL TONELADAS CARREGADAS</span>
                    </div>
                    <img class="imgfundo3" src="imagens/fundo1.jpg" alt="">
                    <img class="imgfundo4" src="imagens/fundo2.jpg" alt="">
                </div>

                <div class="fundo3">

                    <div class="counterconteiner">

                        <div class="contador">
                            <span>R$</span>
                            <span class="num" data-val="2"></span>
                            <span>BI</span>
                        </div>
                        <span class="text" style="text-align: center;">EM MERCADORIAS TRANSPORTADAS</span>
                    </div>
                    <img class="imgfundo5" src="imagens/fundo1.jpg" alt="">
                    <img class="imgfundo6" src="imagens/fundo2.jpg" alt="">
                </div>
            </div>
        </div>

    </div>


</section>
<div class="sobrenos">
    <a href="https://google.com" class="button butaosobrenos" style="margin-top: 120px">SAIBA MAIS SOBRE NÓS</a>

</div>

<script>
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 5000;
    valueDisplays.forEach((valueDisplay) => {
        let startValue = 0;
        let endValue = parseInt(valueDisplay.getAttribute("data-val"));
        let duration = Math.floor(interval / endValue);
        let counter = setInterval(function () {
            startValue += 1;
            valueDisplay.textContent = startValue;
            if (startValue == endValue) {
                clearInterval(counter);
            }
        }, duration);
    });
</script>