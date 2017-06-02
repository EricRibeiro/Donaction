
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Donaction Enterprise">
    <meta name="author" content="Donaction Team">

    <title>Donaction Enterprise</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this theme -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="styles/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="styles/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="styles/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="styles/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="styles/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="styles/animate.min.css" rel="stylesheet" type="text/css">
    <link href="styles/device-mockups.min.css" rel="stylesheet" type="text/css">
    <link href="styles/modalLogin.css" rel="stylesheet">
    <link href="styles/sweetalert.css" rel="stylesheet">

    <!-- Custom styles for this theme -->
    <!-- Uncomment the color scheme you want to use! Red is chosen by default! -->
    <link href="styles/style.css" rel="stylesheet" type="text/css">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

    <!-- build:remove:dist -->
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse navbar-expanded" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                Donaction
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#team">Empresas Parceiras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Processo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#campanhas">Campanhas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item">
                    	<a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php include 'pages/modals/login.php'; ?>

    <!-- Masthead -->
    <header class="masthead" style="background-image: url('images/backgrounds/bg-header.jpg');">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto text-center text-white">
                    <img class="masthead-img img-fluid mb-3" src="" alt="">
                    <div class="masthead-title">Donaction Enterprise</div>
                    <hr class="colored">
                    <div class="masthead-subtitle">Conectando Benfeitores</div>
                    <hr class="colored">
                    <a class="btn btn-primary page-scroll" href="pages/cadastro.html">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a class="btn page-scroll" href="#about">
                <i class="fa fa-angle-down fa-fw"></i>
            </a>
        </div>
    </header>

    <!-- About Section -->
    <section class="page-section" id="about">
        <div class="container-fluid">
            <div class="wow fadeIn text-center">
                <h1></h1>
                <p class="mb-0">A Donaction é uma empresa especializada em marketing do bem. Acreditamos que através de um ambiente saudável onde todos ganham podemos transformar o mundo em um lugar melhor!</p>
            </div>
            <hr class="colored">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" data-wow-delay=".2s">
                        <i class="fa fa-thumbs-o-up fa-4x"></i>
                        <h4>Marketing do Bem</h4>
                        <p class="mb-0">Tenha o seu número de clientes aumentado e a sua empresa atrelada a uma imagem positiva através do nosso modelo de marketing!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" data-wow-delay=".4s">
                        <i class="fa fa-handshake-o fa-4x"></i>
                        <h3>Todos ganham!</h3>
                        <p class="mb-0">A Donaction faz questão de promover um ambiente saudável entre todas a partes envolvidas no processo!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 pb-4 pb-lg-0 h-100" data-wow-delay=".6s">
                        <i class="fa fa-area-chart fa-4x"></i>
                        <h3>Análises</h3>
                        <p class="mb-0">Iremos achar a melhor campanha e a melhor estratégia de marketing para a sua empresa independente do seu ramo!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="wow fadeIn px-4 h-100" data-wow-delay=".8s">
                        <i class="fa fa-heart fa-4x"></i>
                        <h3>Feita com amor!</h3>
                        <p class="mb-0">Todas as nossas campanhas são feitas com muito carinho para satisfazermos o máximo tanto você quanto os seus clientes!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="page-section bg-faded" id="team">
        <div class="container text-center wow fadeIn">
            <h2>Nossas empresas parceiras!</h2>
            <p class="mb-0">Essas empresas confiam e trabalham com a Donaction:</p>
            <hr class="colored">
            <div class="team-carousel owl-carousel owl-theme mt-4">

                <!-- Team Carousel Item 1 -->
                <div class="item">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="images/empresas/1.png" alt="Amazon">
                    <div class="team-caption">
                        <h3>Amazon</h3>
                        <hr class="colored">
                        <p>"...and you're done"</p>
                    </div>
                </div>

                <!-- Team Carousel Item 2 -->
                <div class="item">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="images/empresas/2.png" alt="Google">
                    <div class="team-caption">
                        <h3>Google</h3>
                        <hr class="colored">
                        <p>"Don't be evil"</p>
                    </div>
                </div>

                <!-- Team Carousel Item 3 -->
                <div class="item">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="images/empresas/3.jpg" alt="Microsoft">
                    <div class="team-caption">
                        <h3>Microsoft</h3>
                        <hr class="colored">
                        <p>"We Innovate You Turn"</p>
                    </div>
                </div>

                <!-- Team Carousel Item 4 -->
                <div class="item">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="images/empresas/4.png" alt="Apple">
                    <div class="team-caption">
                        <h3>Apple</h3>
                        <hr class="colored">
                        <p>"Think different"</p>
                    </div>
                </div>

                <!-- Team Carousel Item 5 -->
                <div class="item">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="images/empresas/5.png" alt="GitHub">
                    <div class="team-caption">
                        <h3>GitHub</h3>
                        <hr class="colored">
                        <p>"Social Code Hosting"</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action" style="background-image: url('images/backgrounds/bg-quote.jpg');">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <span class="quote">Marketing <span class="text-primary">autêntico</span> não é a arte de vender o que você faz mas saber o que fazer. É a arte de <span class="text-primary"> identificar</span> e <span class="text-primary"> compreender</span> as necessidades dos <span class="text-primary"> consumidores</span> e criar soluções que tragam satisfação aos consumidores, lucros aos produtores e benefícios aos acionistas.</span>
                    <hr class="colored">
                    <a class="btn btn-primary page-scroll" href="#services">Como nós trabalhamos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section services" id="services">
        <div class="container">
            <div class="text-center wow fadeIn">
                <h2>Nosso processo</h2>
                <hr class="colored">
                <p class="mb-0">Esta é a maneira como trabalhamos.</p>
            </div>
            <div class="row mt-4">
                <!-- Service Item 1 -->
                <div class="col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-clipboard rounded-circle"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Planejamento</h3>
                            <ul>
                                <li>Entrevistar o cliente</li>
                                <li>Juntar dados dos consumidores</li>
                                <li>Analizar os dados</li>
                                <li>Definir a estratégia</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Service Item 2 -->
                <div class="col-lg-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-pencil rounded-circle"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Criação</h3>
                            <ul>
                                <li>Criar conteúdo</li>
                                <li>Receber feedback</li>
                                <li>Refinar conteúdo</li>
                                <li>Receber mais feedback</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Service Item 3 -->
                <div class="col-lg-4 wow fadeIn" data-wow-delay=".6s">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-rocket rounded-circle"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Lançamento</h3>
                            <ul>
                                <li>Lançar a campanha</li>
                                <li>Divulgar o conteúdo criado</li>
                                <li>Coletar os dados</li>
                                <li>Garantir a manutenção</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="page-section" id="campanhas">
        <div class="container text-center wow fadeIn">
            <h2>Campanhas</h2>
            <hr class="colored">
            <p>Estas são algumas das campanhas que fizemos.</p>
            <div class="controls mt-3">
                <button type="button" class="control btn btn-secondary btn-sm mx-2 mb-4" data-filter="all">Todas</button>
                <button type="button" class="control btn btn-secondary btn-sm mx-2 mb-4" data-filter=".sangue">Doação de sangue</button>
                <button type="button" class="control btn btn-secondary btn-sm mx-2 mb-4" data-filter=".educacao">Incentivo a educação</button>
                <button type="button" class="control btn btn-secondary btn-sm mx-2 mb-4" data-filter=".social">Incentivos Sociais</button>
            </div>
            <div class="portfolio-grid clearfix" id="portfolioList">
                <!-- Grid Item 1 -->
                <div class="mix educacao" href="images/grid/grid-1.jpg" title="Leitura">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-1.jpg" alt="Leitura">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Leitura</a>
                                <span class="text-category">Campanha "Ler fazendo o bem"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 2 -->
                <div class="mix social" href="images/grid/grid-2.jpg" title="Elmo Calçados">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-2.jpg" alt="Elmo Calçados">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Elmo Calçados</a>
                                <span class="text-category">Campanha "Calçando o mundo"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 3 -->
                <div class="mix sangue" href="images/grid/grid-3.jpg" title="Sadia">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-3.jpg" alt="Sadia">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Sadia</a>
                                <span class="text-category">Campanha "O valor da vida"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 4 -->
                <div class="mix social" href="images/grid/grid-4.jpg" title="Leroy Merlin">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-4.jpg" alt="Leroy Merlin">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Leroy Merlin</a>
                                <span class="text-category">Campanha "Casa dos sonhos"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 5 -->
                <div class="mix social" href="images/grid/grid-5.jpg" title="Textil Abril">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-5.jpg" alt="Textil Abril">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Textil Abril</a>
                                <span class="text-category">Campanha "Inverno para todos"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 6 -->
                <div class="mix sangue" href="images/grid/grid-6.jpg" title="Editora Abril">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-6.jpg" alt="Editora Abril">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Editora Abril</a>
                                <span class="text-category">Campanha "O peso da vida"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 7 -->
                <div class="mix educacao" href="images/grid/grid-7.jpg" title="Pizza Hut">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-7.jpg" alt="Pizza Hut">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Pizza Hut</a>
                                <span class="text-category">Campanha "O sabor do conhecimento"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 8 -->
                <div class="mix educacao" href="images/grid/grid-8.jpg" title="Redbull">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-8.jpg" alt="Redbull">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Redbull</a>
                                <span class="text-category">Campanha "A energia do saber"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 9 -->
                <div class="mix sangue" href="images/grid/grid-9.jpg" title="Gol Linhas Aéreas">
                    <div class="portfolio-wrapper">
                        <img src="images/grid/grid-9.jpg" alt="">
                        <div class="caption">
                            <div class="caption-text">
                                <a class="text-title">Gol Linhas Aéreas</a>
                                <span class="text-category">Campanha "Vida nas alturas"</span>
                            </div>
                            <div class="caption-bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testomonials Section -->
    <section class="page-section testimonials bg-faded">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonials-carousel">
                        <!-- Testimonial Item 1 -->
                        <div class="item mb-4">
                            <p class="lead">"Trabalhar com a Donaction foi uma experiência recompensadora!"</p>
                            <hr class="colored">
                            <div class="testimonial-img">
                                <img class="rounded-circle img-fluid" src="images/testemunhas/1.jpg" alt="">
                            </div>
                            <div class="testimonial-author">
                                <span class="name">Ednaldo Pereira</span>
                                <p class="small">Cantor de sucesso</p>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item 2 -->
                        <div class="item mb-4">
                            <p class="lead">"A Donaction ajudou a minha empresa com novos clientes e dando uma imagem positiva a ela!"</p>
                            <hr class="colored">
                            <div class="testimonial-img">
                                <img class="rounded-circle img-fluid" src="images/testemunhas/2.jpg" alt="">
                            </div>
                            <div class="testimonial-author">
                                <span class="name">Yudi Tamashiro</span>
                                <p class="small">CEO da empresa praystêichu</p>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item 3 -->
                        <div class="item mb-4">
                            <p class="lead">"Eu era considerado vilão, agora virei presidente graças a Donaction!"</p>
                            <hr class="colored">
                            <div class="testimonial-img">
                                <img class="rounded-circle img-fluid" src="images/testemunhas/3.png" alt="">
                            </div>
                            <div class="testimonial-author">
                                <span class="name">Dr. Ácula</span>
                                <p class="small">Famoso vampiro da década de 20</p>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item 4 -->
                        <div class="item mb-4">
                            <p class="lead">"Se você não sabe da Donaction nem eu!"</p>
                            <hr class="colored">
                            <div class="testimonial-img">
                                <img class="rounded-circle img-fluid" src="images/testemunhas/4.jpg" alt="">
                            </div>
                            <div class="testimonial-author">
                                <span class="name">Irineu</span>
                                <p class="small">Motorista ousado</p>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item 5 -->
                        <div class="item mb-4">
                            <p class="lead">"au!"</p>
                            <hr class="colored">
                            <div class="testimonial-img">
                                <img class="rounded-circle img-fluid" src="images/testemunhas/5.jpeg" alt="">
                            </div>
                            <div class="testimonial-author">
                                <span class="name">Doge</span>
                                <p class="small">Cachorro nas horas vagas</p>
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup Call to Action -->
    <section class="page-section signup-form bg-inverse text-white">
        <div class="container text-center">
            <h3 class="m0">Inscreva-se no nosso feed de notícias!</h3>
            <hr class="colored">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <!-- Replace the form action in the line below with your MailChimp embed action! Visit the documentation for additional instructions! -->
                        <form role="form" action="//startbootstrap.us3.list-manage.com/subscribe/post?u=531af730d8629808bd96cf489&amp;id=afb284632f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div class="input-group input-group-lg">
                                <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Endereço de e-mail">
                                <span class="input-group-btn">
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Inscrever!</button>
                                </span>
                            </div>
                            <div id="mce-responses">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End MailChimp Signup Form -->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container wow fadeIn">
            <div class="text-center">
                <h2>Contato</h2>
                <hr class="colored">
                <p>Alguma dúvida/elogio/sugestão? Diga para gente para melhorarmos sempre! a equipe Donaction agradece!</p>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8 offset-lg-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-12 floating-label-form-group controls">
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Por favor digite seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-12 floating-label-form-group controls">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Por favor digite seu e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-12 floating-label-form-group controls">
                                <label>Telefone</label>
                                <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Por favor digite seu número de telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-12 floating-label-form-group controls">
                                <label>Mensagem</label>
                                <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Por favor digite a mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-secondary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" style="background-image: url('images/backgrounds/bg-footer.jpg')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 footer-contact-details">
                    <h4><i class="fa fa-phone"></i> Ligue para nós</h4>
                    <p>(31) 3427-1277</p>
                </div>
                <div class="col-md-4 footer-contact-details">
                    <h4><i class="fa fa-map-marker"></i> Nos visite</h4>
                    <p>Avenida Coronel José Dias Bicalho Nº 515
                        <br>Belo Horizonte, MG 31275-050</p>
                </div>
                <div class="col-md-4 footer-contact-details">
                    <h4><i class="fa fa-envelope"></i> E-mail</h4>
                    <p><a href="mailto:donactionenterprise@donaction.com">donactionenterprise@shulambs.com</a>
                    </p>
                </div>
            </div>
            <div class="row footer-social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="copyright">&copy; 2017 Donaction Team</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="scripts/source/agency/jquery.min.js"></script>
    <script src="scripts/source/agency/tether.min.js"></script>
    <script src="scripts/source/agency/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="scripts/source/agency/jquery.easing.min.js"></script>
    <script src="scripts/source/agency/owl.carousel.js"></script>
    <script src="scripts/source/agency/jquery.magnific-popup.min.js"></script>
    <script src="scripts/source/agency/jquery.vide.min.js"></script>
    <script src="scripts/source/agency/mixitup.min.js"></script>
    <script src="scripts/source/agency/wow.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="scripts/source/agency/contact_me.js"></script>
    <script src="scripts/source/agency/jqBootstrapValidation.js"></script>

    <!-- Custom scripts for this theme -->
    <script src="scripts/source/agency/vitality.js"></script>
    <script src="scripts/source/agency/vitality-mixitup.js"></script>
    <script src="scripts/custom/login.js"></script>
    <script src="scripts/custom/sweetalert.min.js"></script>
    <script src="https://use.fontawesome.com/7220ca67c6.js"></script>
    <!-- build:remove:dist -->
</body>

</html>
