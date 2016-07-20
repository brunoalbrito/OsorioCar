<?php
include 'menu.php';
?>   
<!DOCTYP html>
<html lang="pt-br">
<head>
    <title>MecÃ¢nica OsorioCar</title>
    <meta charset="utf-8">
    <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">
    <link rel="stylesheet" type="text/css" href="../css/formularios.css">

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="image/favicon.ico">

    <link rel="stylesheet" type="text/css" href="css/general.css">

    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>  
<body>  
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center">Email</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-5 col-sm-6 col-xs-12 text-middle">
                <form>
                    <div class="form-group">
                        <label>Nome</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <label>Assunto</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <label>Telefone ou Celular</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <label>Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" id="#">
                        </div>
                        <div class="input-group">
                            <label>Digite sua mensagem</label>
                        </div>
                        <textarea class="form-control" rows="9"></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-default btn-lg text-middle" id="check" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>