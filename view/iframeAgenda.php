<?php
session_start();
if ((!isset($_SESSION['usuario'])) || (!isset($_SESSION['senha']))) {
    header('Location: login.php');
}
?>
<!DOCTYP html>
<html lang="pt-br">
    <head>
        <title>MecÃ¢nica OsorioCar</title>
        <meta charset="utf-8">
        <meta name="author" content="Bruno Albuquerque Brito e Pedro Henry">

        <!--BootStrap-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <section>
            <?php
            include './conexao.php';
            // executando a operacao de SQL
            $resultado = mysqli_query($conexao, "select pessoa.idPessoa,pessoa.nome, pessoa.sobrenome, pessoa.telefone, pessoa.celular,pessoa.email, fisica.rg, fisica.cpf "
                    . "FROM pessoa INNER JOIN fisica ON (pessoa.idPessoa = fisica.fkPessoa)") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
            if ($resultado) {
                echo("<table class='table'><thead class='thead-inverse'>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>RG</th>
                    <th>CPF</th>
                </tr>
  </thead>");
                while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr><td>" . $row["idPessoa"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["sobrenome"] . "</td><td>" . $row["telefone"] . "</td><td>" . $row["celular"] . "</td><td>" . $row["email"] . "</td>"
                    . "<td>" . $row["rg"] . "</td><td>" . $row["cpf"] . "</td></tr>";
                }
                echo("</table>");
            }
            // fechamento da conexÃ£o   
            mysqli_close($conexao);
            ?> 
        </section>
    </body>
</html> 