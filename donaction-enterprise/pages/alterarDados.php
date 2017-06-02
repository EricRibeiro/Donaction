<!DOCTYPE html>
<html>
    <head>
        <title>Sessão de usuário</title>
        <meta charset="utf-8"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../styles/enterpriseTemplate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../styles/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="../styles/navBar.css">
    </head>
    <body onload="userSession()">
         <?php include 'modals/navBar.php';?>
         <div class="container-fluid">
            <form class="register-form" action="http://127.0.0.1" method="POST" id="atualizar">
                <div class="row row-centered">
                    <div class="col-lg-12 col-centered">
                        <picture>
                            <img class="img-circle" height="180" id="userAvatar" width="180">
                            </img>
                        </picture>
                    </div>
                </div>
                <div class="row row-centered">
                    <div class="col-lg-12 col-centered">
                        <div class="userName" id="userName">
                            Usuário
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="cnpj">
                            CNPJ
                        </label>
                        <input class="form-control" id="cnpj" name="cnpj" type="text" readonly>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="email">
                            EMAIL
                        </label>
                        <input class="form-control" id="email" name="email" onclick="clearField(this.id)" onfocusout="notBlank(this.id)" type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="cidade">
                            CIDADE
                        </label>
                        <select class="form-control" id="city" title="Cidade">
                            <option>Belo Horizonte</option>
                            <option>Contagem</option>
                            <option>Betim</option>
                        </select>
                        </input>
                    </div>
                </div>
                <hr>
                    <div class="row row-centered">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 col-centered">
                            <button class="btn btn-default logbutton">
                                Alterar
                            </button>
                        </div>
                    </div>
                </hr>
            </form>
        </div>

        <script src="../scripts/source/agency/jquery.min.js"></script>
        <script src="../scripts/custom/atualizarDados.js"></script>
        <script src="../scripts/custom/navBar.js"></script>
        <script src="../scripts/custom/login.js"></script>
        <script src="../scripts/source/agency/tether.min.js"></script>
        <script src="../scripts/source/agency/bootstrap.min.js"></script>
        <script src="../scripts/source/agency/sweetalert.min.js"></script>
        <script src="https://use.fontawesome.com/7220ca67c6.js"></script>
    </body>
</html>