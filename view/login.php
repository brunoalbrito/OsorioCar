<!--MENU-->
<?php
include '../menu.php';
?>  
<!DOCTYP html>
<html lang="pt-br">
<head>
    <title>Mecânica OsorioCar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">

    <link rel="shortcut icon" href="image/favicon.ico">


    

    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/content/login/default.css">
    <script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    
</head>  

<body>    
    <!--Login-->
    <div class="container">
        <form action="../dao/userauthen.php" method="post">
            <div class="col-md-4 col-sm-4 col-xs-12 text-middle">
                <div class="form-group form-group-lg">
                    <label>Nome</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="#" name="nome" placeholder="Nome de usuario" placeholder="Seu nome" title="Preencha o campo NOME (Apenas letras A-z no mínimo 3 dígitos)"
                        pattern="[A-Za-z]{3,}" required autofocus>
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    <label>Senha</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" id="#" type="password" name="senha" placeholder="Senha"  required>
                    </div>
                </div>
                <div class="text-center form__field">
                    <button class="btn btn-default btn-lg text-middle" id="check" type="submit">LOGIN</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>