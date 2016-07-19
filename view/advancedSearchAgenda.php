<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>Mecanica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
        <link rel="stylesheet" type="text/css" href="css/formularios.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--        <link rel="shortcut icon" href="image/favicon.ico">-->
        <link rel="stylesheet" type="text/css" href="css/inside_system.css">
    </head>  
    <body>  
        <!--MENU-->
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

                        
                        <li><a href="login.php">Sair</a></li>
                </div>
            </div>
        </nav>

        <section>
            <legend><h2>Informacoes Pessoais</h2></legend>
            
            <?php
            include './conexao.php';
            // executando a operacao de SQL
            $nome = $_POST['nome'];
            $sobrenome = $_POST ['sobrenome'];
            $resultado = mysqli_query($conexao, "select pessoa.idPessoa,pessoa.nome, pessoa.sobrenome, pessoa.telefone, pessoa.celular,pessoa.email, fisica.rg, fisica.cpf "
                    . "FROM pessoa INNER JOIN fisica ON (pessoa.idPessoa = fisica.fkPessoa) "
                    . "WHERE nome = '" . $nome . "'AND sobrenome='" . $sobrenome . "'") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
            //SE SELECÃO EXECUTADA COM SUCESSO
            if ($resultado) {
                echo("<table border='1'>"
                . "<tr><th>ID</th><th>Nome</th><th>Sobrenome</th><th>Telefone</th><th>Celular</th><th>Email</th><th>CPF</th><th>RG</th></tr>");
                //CONSTINUA MONTANDO O ARRAY ENQUANTO HOUVER REGISTROS
                //PERCORRE ROW(LINHA) FOR ROW DO SUA TABELA
                while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr><td>" . $row["idPessoa"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["sobrenome"] . "</td><td>" . $row["telefone"] . "</td><td>" . $row["celular"] . "</td><td>" . $row["email"] . "</td>"
                    . "<td>" . $row["cpf"] . "</td><td>" . $row["rg"] . "</td></tr>";
                }
                echo("</table>");
            }
            // fechamento da conexão 
            mysqli_close($conexao);
            ?> 
        </section>
    </body>
</html>