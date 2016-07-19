<?php
// session_start();
// if ((!isset($_SESSION['usuario'])) || (!isset($_SESSION['senha']))) {
//     header('Location: login.php');
// }
?>
<!DOCTYP html>
<html lang="pt-br">
<head>
    <title>Mecânica OsorioCar</title>
    <meta charset="utf-8">
    <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">

    <link rel="stylesheet" href="../css/bootstrap.css">

    <script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">


    <link rel="shortcut icon" href="image/favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
</head> 
<body>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="indexsystem.php">Osório Car</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="indexsystem.php">Inicio <span class="sr-only">(current)</span></a></li>

                <!---->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="cadastrarfisica.php">Cadastrar Pessoa</a></li>
                        <li><a href="cadastrarjuridica.php">Cadastrar Empresa</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Veículo<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="cadastrarveiculo.php">Cadastrar Veículo</a></li>
                        <!-- <li><a href="cadastrarjuridica.php">Cadastrar Empresa</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>-->
                    </ul>
                </li>


                <li><a href="logout.php">Sair</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</body>
</html>
