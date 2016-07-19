<?php

include './dao/conexao.php';


//Inicializar a sessão
session_start();

$nome = ($_POST["nome"]);
$senha = ($_POST["senha"]);

$resultado = mysqli_query($conexao, "SELECT * FROM admin WHERE "
        . "nome = '" . $nome . "' AND senha ='" . $senha . "';")or die("Nao foi possivel executar a SQL: " . mysqli_error($conexao));

if (mysqli_num_rows($resultado) > 0) {
    $_SESSION["usuario"] = $nome;
    $_SESSION["senha"] = $senha;
    header('Location: menusistema.php');
//    echo "<script>alert('Valores Invalidos');";
//    echo "javascript:window.location='login.php';</script>";
} else {
    
}
?>


