<?php
session_start();
if ((!isset($_SESSION['usuario'])) || (!isset($_SESSION['senha']))) {
    header('Location: login.php');
}
?>
<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecanica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
        <link rel="stylesheet" type="text/css" href="css/formularios.css">
    </head>  
    <body>
        <!--MENU-->
        <link rel="shortcut icon" href="image/favicon.ico">

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <nav class="navbar navbar-inverse" style="border-radius:0;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="menusistema.php">Inicio</a></li>

                        <!--ComboBox-->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="historico.html">Agenda<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="agenda.php">Cadastrar e Consultar</a></li>
                                <li><a href="alterarAgenda.php">Alterar e Excluir</a></li>
                            </ul>
                        </li>


                        <li><a href="logout.php">Sair</a></li>

                </div>
            </div>
        </nav>
        <section>
            <div class="form-style-6">
         
                <h1>Pesquisar</h1>
                <form name="email" action="exibirAgendaAlEx.php" method="post">
                    Nome:*<input type="text" id="nome" name="nome" placeholder="Seu nome" title="Preencha o campo NOME (Apenas letras A-z no mínimo 3 dígitos)" pattern="[A-Za-z]{3,}" required autofocus>
                    Sobrenome:*<input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" title="Preencha o campo SOBRENOME (Apenas letras A-z no mínimo 3 dígitos)" pattern="[A-Za-z]{3,}" required>&nbsp;</br></br>
                    Cpf:*<input type="text" id="cpf" name="cpf" placeholder="999.999.999-99" title="Preencha o campo CPF 999.999.999-99" required></br></br>
                    <input type="submit" value="Selecionar" name="submit">
                </form>
                </br>
            </div>
                <iframe name="palco" src="iframeAgenda.php" width="100%"></iframe>
        </section>
    </body>
</html>