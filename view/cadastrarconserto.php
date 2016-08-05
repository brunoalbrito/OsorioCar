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
        <form class="text-middle" action="../control/controller.php?act=registrarConserto" method="post" style="width:80%">
            <div class="form-group">
                <label>FK id do carro para facilitar cadastro inicial</label>
                <div class="form-group"> 
                    <?php 

                        include '../control/controller.php';

                        $array = Controller::buscarCarro($_POST['placa']);
                        echo "<input type='text' class='form-control' id='#' name='idcarro' value='".$array[0]->id."' readonly>";
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label>Data de Registro</label>
                <div class="input">
                    <input type="text" class="form-control" id="#" name="dataregistro">
                </div>
            </div>

            <div class="form-group">
                <label>Peças Utilizadas</label>
                <div class="input">
                    <input type="text" class="form-control" id="#" name="pecasUtilizadas">
                </div>
            </div>

            <div class="form-group">
                <label>Valor Total de Peças</label>
                <div class="input">
                    <input type="text" class="form-control" id="#" name="valorPecas">
                </div>
            </div>

            <div class="form-group">
                <label>Descrição do serviço</label>
                <div class="input">
                    <input type="text" class="form-control" id="#" name="descricao">
                </div>
            </div>

            <div class="form-group">
                <label>Valor Mão de Obra</label>
                <div class="input">
                    <input type="text" class="form-control" id="#" name="valorMaodeObra">
                </div>
            </div>




            <div class="text-center">
                <button class="btn btn-default btn-lg text-middle" id="check" type="submit"><i class="fa fa-check" aria-hidden="true"></i>Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>
