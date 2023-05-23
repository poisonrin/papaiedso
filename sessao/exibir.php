<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
</head>
<body>
    <?php
        error_reporting(0); //ignora erros de sintaxe

        echo "<h3>Exibindo dados da Sessão</h3>";

        session_start();

        $nome = $_SESSION["nome"];
        $email = $_SESSION["email"];

        echo "<strong>Nome: </strong>" . $nome;
        echo "<br><strong>Email: </strong>" . $email;
    ?>
</body>
</html>