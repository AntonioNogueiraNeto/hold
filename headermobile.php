<style>
    :root {
        --cor-primaria: #A9090D;
        --cor-secundaria: #610304;

    }

    .img-fluidd {
        width: 200px;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    li {
        list-style: none;
        color: white;
    }

    a {
        text-decoration: none;
        color: white;
        font-family: 'Georama', sans-serif;

    }

    .navbarhamburger {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 24px;
        background-color: white;
        z-index: 1;
        position: relative;
    }

    .navmenu {
        display: flex;
        justify-content: space-between;
        gap: 60px;
        align-items: center;
        position: absolute;
    }

    .nav-bradding {

        font-size: 2rem;
    }

    .navbarlinks {
        transition: 0.7s ease;
    }

    .navbarlinks:hover {
        color: black;
    }

    .hamburger {
        padding: 20px;
        background-color: var(--cor-primaria);
        display: none;
        cursor: pointer;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background-color: white;
    }

    @media (max-width: 768px) {
        .nav-bradding {
            margin: auto;
        }

        .hamburger {
            display: block;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        .navmenu {
            left: -100%;
            top: 170px;
            gap: 0;
            flex-direction: column;
            background-color: var(--cor-primaria);
            width: 100%;
            text-align: center;
            transition: 0.3s;
        }

        .navitem {
            margin: 16px 0;
            text-align: center;
            align-items: center;
            margin-right: 40px;
        }

        .navmenu.active {
            left: 0;
            top: 170px;
            /* Ajuste o valor conforme necessário */
        }
    }
</style>


<body>
    <header>
        <nav class="navbarhamburger">
            <a href="index.php" class="nav-bradding"><img class="img-fluidd" src="imagens/logo-quadrada-vermelha.png"
                    alt=""></a></a>

            <ul class="navmenu">
                <li class="navitem">
                    <a href="institucional.php" class="navbarlinks">A EMPRESA</a>
                </li>
                <li class="navitem">
                    <a href="servicos.php" class="navbarlinks">SERVIÇOS</a>
                </li>
                <li class="navitem">
                    <a href="area.php" class="navbarlinks">ÁREAS DE ATUAÇÃO</a>
                </li>
                <li class="navitem">
                    <a href="galeria.php" class="navbarlinks">GALERIA</a>
                </li>
                <li class="navitem">
                    <a href="index.php#contact" class="navbarlinks">CONTATO</a>
                </li>
                <li class="navitem">
                    <a href="https://www.sisgen.fmrtecnologia.com.br/tracking/appTK_Login/" class="navbarlinks"
                        target="_blank">ÁREA DO CLIENTE</a>
                </li>

            </ul>

        </nav>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>

        </div>
    </header>

    <script>

        const hamburger = document.querySelector(".hamburger")
        const naVmenu = document.querySelector(".navmenu")

        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active")
            naVmenu.classList.toggle("active")

        })

    </script>
</body>