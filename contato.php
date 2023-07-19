<style>
    .box-geral-contato div.box-contato h3:before {
        content: "";
        position: absolute;
        border-bottom: 3px solid var(--cor-primaria);
        width: 250px;
        left: 0;
        bottom: 0
    }

    .box-geral-contato div.box-contato h3 {
        padding-left: 120px;
        padding-bottom: 6px;
        font-size: 25px;
        color: var(--cor-primaria);
        line-height: 42px;
        position: relative;
    }

    @media only screen and (max-width: 600px) and (min-width: 200px) {



        .box-geral-contato div.box-contato h3 {

            font-size: 18px;
            padding: 0;
            width: 100vw;
            padding-left: 24px;
        }

        .box-geral-contato div.box-contato h3:before {
            content: "";
            position: absolute;
            border-bottom: 3px solid var(--cor-primaria);
            width: 90vw;
            left: 0;
            bottom: 0;

        }
    }
</style>

<section id="contact" class="contact contatcrelative section-bg-contact">
    <section class="informacoes">
        <div class="box-geral-contato">
            <div class="box-contato">
                <h3 id="">CONTATO</h3>
            </div>


    </section>
    <div class="container" style="padding-top: 60px;">



        <div class="row">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Nosso Endereço</h3>
                    <p>Rodovia Anel Rodoviário Celso Mello Azevedo - 5330 <br> Betânia - Belo Horizonte / MG
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>E-mail de Contato</h3>
                    <p>contato@holdtransportepesado.com.br
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Ligue para nós</h3>
                    <p>(31) 3259-3320</p>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 ">

                <iframe class="mb-4 mb-lg-0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5303.207307413239!2d-43.99618332219861!3d-19.969284031344316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6962787dc9ff5%3A0xfe3bd403e4e67457!2sROD.%20Anel%20Rodovi%C3%A1rio%20Celso%20Mello%20Azevedo%20-%20Belo%20Horizonte%2C%20MG!5e0!3m2!1sen!2sbr!4v1689683337108!5m2!1sen!2sbr"
                    frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>

                <!-- <iframe class="mb-4 mb-lg-0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.9813421087965!2d-43.99990771971547!3d-19.967286891567003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa697e032f058d7%3A0x95f11967f6aff94c!2sHold%20Transporte%20Pesado!5e0!3m2!1spt-BR!2sbr!4v1688678625134!5m2!1spt-BR!2sbr"
                    frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe> -->
            </div>

            <div class="col-lg-6">
                <form action="./enviar-email.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Sua mensagem foi enviada com sucesso! Agradecemos o seu contato.</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Referência ao formulário
        var form = document.querySelector(".php-email-form");

        // Evento de envio do formulário
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            // Dados do formulário
            var formData = new FormData(form);

            // Cria uma instância do objeto XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Define o método e a URL para envio do formulário
            xhr.open("POST", "./enviar-email.php", true);

            // Manipulador de eventos para quando a requisição for concluída
            xhr.onload = function () {
                form.reset(); // Limpa o formulário

                // Exibe a mensagem de "Mensagem enviada"
                var sentMessage = document.querySelector(".sent-message");
                sentMessage.style.display = "block";

                // Aguarde alguns segundos e, em seguida, oculte a mensagem de "Mensagem enviada"
                setTimeout(function () {
                    sentMessage.style.display = "none";
                }, 5000);
            };

            // Envia a requisição
            xhr.send(formData);
        });
    });
</script>