<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sua Biblioteca Pessoal">
    <title>Moby - Sua Biblioteca Pessoal</title>
    <link rel="shortcut icon" href="../public/img/img-web.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav id="top" ;>
            <div class="welcome">
                <span>SEJA BEM VINDO!</span>
            </div>

            <a href="./signup.php" class=welcome>
                <span>REGISTRE-SE</span>
            </a>

        </nav>
        <nav id="mid">
            <img src="../public/img/logo-header.png" alt="">
            <div class="search">
                <div class="input">
                    <input type="search" placeholder="Busque por livros aqui!">
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: #bcbcbc; margin-left: 10px;">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown" style="margin-left: 10px;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    EXPLORAR
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="estante.php">Minha Estante</a></li>
                    <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                </ul>
            </div>

        </nav>
        <nav id="bottom">
            <h3 style="margin-top: 10px;">DÊ VIDA A SUA BIBLIOTECA PESSOAL! <a href="estante.php">
                    <img src="../public/img/mais.png" alt="adicionar livro" style="width: 25px">
                </a>
                </h1>
        </nav>




    </header>


    <main>

        <div class="container" style="margin-top: 60px; margin-bottom: 60px;">

            <div id="carouselAutores" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselAutores" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselAutores" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselAutores" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselAutores" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner" style="height: 15em;">
                    <div class="carousel-item h-100 active"
                        style="background: url(../public/img/Frame-0.png) center/contain no-repeat;">
                    </div>
                    <div class="carousel-item h-100"
                        style="background: url(../public/img/Frame-1.png) center/contain no-repeat;">
                    </div>
                    <div class="carousel-item h-100"
                        style="background: url(../public/img/Frame-2.png) center/contain no-repeat;">
                    </div>
                    <div class="carousel-item h-100"
                        style="background: url(../public/img/Frame-3.png) center/contain no-repeat;">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutores"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutores"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        </section>
        <section id="books">
            <div class="title">
                <hr>
                <hr>
                <img src="../public/img/logo-web.png" alt="" srcset="">
                <h1>Livros em Destaque</h1>
            </div>
            <div class="grade">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="../public/img/olhos-dagua.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">OLHOS D’ÁGUA</h5>
                            <p class="card-text"><strong>Em “Olhos D'água” Conceição Evaristo constrói uma série de
                                    narrativas, composta por 15 diferentes contos, que se entrelaçam ao relatarem a
                                    história de mulheres e homens negros que sofreram e sofrem os mais diferentes tipos
                                    de violência e depreciação na sociedade.</strong></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="../public/img/hora-da-estrela.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">A HORA DA ESTRELA</h5>
                            <p class="card-text"><strong>A Hora da Estrela é o retrato da jovem datilógrafa alagoana
                                    Macabéa, que migra para o Rio de Janeiro e tem novas experiências na cidade grande.
                                    A narrativa traz conflitos e reflexões existenciais da protagonista e também daquele
                                    que conta sua história, Rodrigo S. M. O livro possui, na realidade, 13
                                    títulos.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="grade">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="../public/img/o-tesouro.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">O TESOURO DA CASAVELHA</h5>
                            <p class="card-text"><strong>O Tesouro da Casa Velha (1989) é um livro especial: ../publicado
                                    postumamente, traz uma seleção de 18 textos inéditos escritos durante a velhice,
                                    depois dos 90 anos de Cora Coralina, e apresenta uma forte carga de preocupação
                                    acerca dos atores sociais, em especial os injustiçados e humilhados.</strong></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="../public/img/percy-jackson.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">PERCY JACKSON E OS OLIMPIANOS</h5>
                            <p class="card-text"><strong>Percy Jackson terá uma missão perigosa. Enquanto enfrenta
                                    monstros e engana deuses, ele terá uma jornada através dos EUA para devolver o
                                    raio-mestre de Zeus e impedir uma guerra iminente.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="grade">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="../public/img/peru-de-natal.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">O PERU DE NATAL</h5>
                            <p class="card-text"><strong>Em “Olhos D'água” Conceição Evaristo constrói uma série de
                                    narrativas, composta por 15 diferentes contos, que se entrelaçam ao relatarem a
                                    história de mulheres e homens negros que sofreram e sofrem os mais diferentes tipos
                                    de violência e depreciação na sociedade.</strong></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="../public/img/harry-potter.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">HARRY POTTER E A PEDRA FILOSOFAL</h5>
                            <p class="card-text"><strong>Harry Potter, um órfão maltratado pelos tios, descobre aos 11
                                    anos que é um bruxo destinado a enfrentar o mal que matou seus pais. Ele é o único
                                    sobrevivente de um ataque desse bruxo, marcado por uma cicatriz em forma de raio.
                                    Harry entra em um mundo mágico, onde aprende sobre sua verdadeira história.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="grade">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="../public/img/senhor-dos-aneis1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">O SENHOR DOS ANÉIS</h5>
                            <p class="card-text"><strong>Em uma terra fantástica e única, um hobbit recebe de presente
                                    de seu tio um anel mágico e maligno que precisa ser destruído antes que caia nas
                                    mãos do mal. Para isso, o hobbit Frodo tem um caminho árduo pela frente, onde
                                    encontra perigo, medo e seres bizarros.</strong></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="../public/img/o-hobbit.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">O HOBBIT</h5>
                            <p class="card-text"><strong>Bilbo Bolseiro é um hobbit que leva uma vida confortável e sem
                                    ambições, raramente aventurando-se para além de sua despensa ou sua adega. Mas seu
                                    contentamento é perturbado quando Gandalf, o mago, e uma companhia de anões batem em
                                    sua porta e levam-no para uma expedição.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section>
    </main>


    <footer style="margin-top: 20px">
        <span style="color: white;">©Copyright 2024 Moby. All rights reserved</span>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>


</body>

</html>