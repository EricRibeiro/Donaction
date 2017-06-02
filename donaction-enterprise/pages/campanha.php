<!DOCTYPE html>
<html>
<head>
    <title>Sessão de usuário</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/enterpriseTemplate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="../styles/navBar.css">
    <link rel="stylesheet" type="text/css" href="../styles/campanha.css">
</head>
<body>
<?php include 'modals/navBar.php'; ?>
<section style="background:#efefe9;">
    <div class="container">
        <div class="row">
            <div class="board">
                <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                        <div class="liner">
                        </div>
                        <li class="active">
                            <a data-toggle="tab" href="#home" title="Começo">
                                        <span class="round-tabs one">
                                            <i class="glyphicon glyphicon-home">
                                            </i>
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a id="donaction" data-toggle="tab" href="#campanhasAtivas" title="Histórico">
                                        <span class="round-tabs two">
                                            <i class="glyphicon glyphicon-heart">
                                            </i>
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a id="disponiveis" data-toggle="tab" href="#apadrinhe" title="Campanhas">
                                        <span class="round-tabs three">
                                            <i class="glyphicon glyphicon-globe">
                                            </i>
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#stats" title="Progresso">
                                        <span class="round-tabs four">
                                            <i class="glyphicon glyphicon-stats">
                                            </i>
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#doner" title="Pronto">
                                        <span class="round-tabs five">
                                            <i class="glyphicon glyphicon-ok">
                                            </i>
                                        </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <h3 class="head text-center">
                            Você é <strong>MUITO</strong> importante!
                            <span style="color:#f48260;">
                                        ♥
                                    </span>
                        </h3>
                        <p class="narrow text-center">
                            A equipe Donaction agradeçe pelo seu voto de confiança!
                            <br> Nos ajude deixar o mundo um pouqinho melhor!
                        </p>
                        <p class="text-center">
                            <img src="../images/others/8bitHeart.png" width="200" height="150">
                        </p>
                    </div>
                    <div class="tab-pane fade" id="campanhasAtivas">
                        <h3 class="head text-center">
                            Campanhas que você fez parte
                        </h3>
                        <p class="narrow text-center">
                        <div id="campanhasTable">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="apadrinhe">
                        <h3 class="head text-center">
                            Campanhas novas que precisam de <strong>você</strong>!
                        </h3>
                        <p class="narrow text-center">
                        <div class="container">
                            <div class="row" id="modalsCampanhas">
                                
                            </div>
                        </div>
                        </p>
                    </div>
                    <?php include 'modals/campanhaModal.php'; ?>
                    <div class="tab-pane fade" id="stats">
                        <h3 class="head text-center">
                            A <strong>Donaction</strong> valoriza seu altruísmo
                        </h3>
                        <p class="narrow text-center">
                            E para te mostrar isso nós reunimos uma galera que também pensa assim para
                            disponibilizar
                            umas coisas legais a medida que você aparece mais por aqui
                        </p>
                        <p class="text-center">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                            <span class="progress-type">AMIGOS INDICADOS</span>
                            <span class="progress-completed">60%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                            <span class="progress-type">DOAÇÕES POR SEMESTRE</span>
                            <span class="progress-completed">40%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete (info)</span>
                            </div>
                            <span class="progress-type">RECOMPENSAS RECEBIDAS</span>
                            <span class="progress-completed">20%</span>
                        </div>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="doner">
                        <div class="text-center">
                            <i class="img-intro icon-checkmark-circle">
                            </i>
                        </div>
                        <h3 class="head text-center">
                            Mandou Bem!
                        </h3>
                        <p class="narrow text-center">
                            Com a sua ajuda, vidas foram salvas
                        </p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../scripts/source/agency/tether.min.js"></script>
<script src="../scripts/custom/navBar.js"></script>
<script src="../scripts/custom/login.js"></script>
<script src="../scripts/source/agency/sweetalert.min.js"></script>
<script src="https://use.fontawesome.com/7220ca67c6.js"></script>
<script src="../scripts/custom/campanhas.js"></script>
</body>
</html>