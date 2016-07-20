<?php
include 'menusystem.php';
?>

<!DOCTYP html>
<html lang="pt-br">
<head>
    <title>Mecanica OsorioCar</title>
    <meta charset="utf-8">
    <!--Colocar isso para ficar responsivo-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Bruno Albuquerque Brito">
    

    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" type="text/css" href="../css/content/cadastrarfisica/default.css">


</head> 

<body>
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <h1 class="text-font">Cadastro</h1>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 text-middle">
        <form class="text-middle" action="teste.php" method="post" style="width:80%">
            <div class="form-group">
                <label>Nome</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="#" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label>Sobrenome</label>
                <div class="input">
                    <input type="text" class="form-control" id="#" name="sobrenome">
                </div>
            </div>
            <div class="form-group">
                <label>Telefone ou Celular</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="#" name = "telefone">
                </div>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="#" name="cpf">
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-default btn-lg text-middle" id="check" type="submit"><i class="fa fa-check" aria-hidden="true"></i>Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>
