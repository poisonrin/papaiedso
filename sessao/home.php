<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>Exemplo de Sessão em PHP</h3>";
        echo "<form name= 'sessao' method= 'post' action=''>";
            echo "<p>";
                echo "<label for='nome'>Nome:</label>";
                echo "<input type='text' name='nome' maxlenght='40' required>";
            echo "</p>";
            echo "<p>";
                echo "<label for='e-mail'>Email:</label>";
                echo "<input type='email' name='email' maxlenght='30' required>";
            echo "</p>";
            echo "<p>";
                echo "<input type='submit' name='enviar' value='Enviar'>";
            echo "</p>";
        echo "</form>";
        if(isset($_POST["enviar"]))
        {
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            //Salvando os dados nas variaveis da sessao
            session_start();
            $_SESSION["nome"] = $nome;
            $_SESSION["email"] = $email;

            echo "<p>Dados salvos com sucesso na sessão</p>";
        }
    ?>
</body>
</html>