<!DOCTYPE html>
<html>
    <head>
        <title>Sessão de usuário</title>
        <meta charset="utf-8"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../styles/css/enterpriseTemplate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../styles/css/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="../styles/css/navBar.css">
        <link rel="stylesheet" type="text/css" href="../styles/css/campanha.css">
    </head>
    <body onload="userSession()">
        <?php include 'modals/navBar.php';?>
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
                                    <a id ="donaction" data-toggle="tab" href="#campanhasAtivas" title="Doações">
                                        <span class="round-tabs two">
                                            <i class="glyphicon glyphicon-heart">
                                            </i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#gifts" title="Presentes">
                                        <span class="round-tabs three">
                                            <i class="glyphicon glyphicon-gift">
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
                                   Essas aqui são as suas doações
                                </h3>
                                <p class="narrow text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <!-- <h3 class="panel-title">Filtro:</h3> -->
                                            <div class="pull-right">
                                                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                                    <i class="glyphicon glyphicon-filter"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar Campanhas" />
                                        </div>
                                        <div id="campanhasTable">
                                        </div>
                            <div class="tab-pane fade" id="gifts">
                                <h3 class="head text-center">
                                    Recompensas dos nossos <strong>super parceiros</strong>
                                </h3>
                                <p class="narrow text-center">
                             <div class="container">
                                  <div class="row">
                                    <img src="../img/userPageHistory/azure.png" alt="Microsoft Azure" class="img-rounded" width="140" height="140">
                                     <img src="../img/userPageHistory/leitura.png" alt="Livraria Leitura" class="img-rounded" width="140" height="140">
                                    <img src="../img/userPageHistory/subway.png" alt="Subway" class="img-rounded" width="140" height="140">
                                    <img src="../img/userPageHistory/amazon.png" alt="Amazon Store" class="img-rounded" width="140" height="140">
                                    <img src="../img/userPageHistory/nerdstore.png" alt="NerdStore" class="img-rounded" width="140" height="140">
                                  </div>
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="stats">
                                <h3 class="head text-center">
                                     A <strong>Donaction</strong> valoriza seu altruísmo
                                </h3>
                                <p class="narrow text-center">
                                    E para te mostrar isso nós reunimos uma galera que também pensa assim para disponibilizar umas coisas legais a medida que você aparece mais por aqui
                                </p>
                                <p class="text-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                        <span class="progress-type">AMIGOS INDICADOS</span>
                                        <span class="progress-completed">60%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                        <span class="progress-type">DOAÇÕES POR SEMESTRE</span>
                                        <span class="progress-completed">40%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
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

        <script src="../scripts/source/agency/jquery.min.js"></script>
        <script src="../scripts/source/custom/navBar.js"></script>
        <script src="../scripts/source/custom/login.js"></script>
        <script src="../scripts/source/agency/tether.min.js"></script>
        <script src="../scripts/source/agency/bootstrap.min.js"></script>
        <script src="../scripts/source/agency/sweetalert.min.js"></script>
        <script src="https://use.fontawesome.com/7220ca67c6.js"></script>
        <script src="../scripts/source/custom/campanhas.js"></script>
    </body>
</html>