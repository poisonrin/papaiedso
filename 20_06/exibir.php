<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
    <link rel="Stylesheet" href="exibir.css">
</head>
<body>
    <?php
        error_reporting(0);
        echo "<main>";
            echo "<h3>Dados da Sessão</h3>";

            session_start();

            $nome = $_SESSION["nome"];
            $senha = $_SESSION["senha"];

            echo "<strong>Nome: </strong>" . $nome;
            echo "<br><strong>Senha: </strong>" . $senha;
        echo "</main>";
    ?>
</body>
</html>