<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home</title>
    <link rel="Stylesheet" href="home.css">
</head>
<body>
    <?php
        echo "<main>";
            echo "<h2>Sessão</h2>";
            echo "<form name= 'sessao' method= 'post' action=''>";
                echo "<p>";
                    echo "<label for='nome'>Nome:</label>";
                    echo "<input type='text' name='nome' maxlenght='40' required>";
                echo "</p>";
                echo "<p>";
                    echo "<label for='senha'>Senha:</label>";
                    echo "<input type='number' name='senha' maxlenght='8' required>";
                echo "</p>";
                echo "<p>";
                    echo "<input type='submit' name='enviar' value='Enviar'>";
                echo "</p>";
            echo "</form>";
            if(isset($_POST["enviar"]))
            {
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];

                session_start();
                $_SESSION["nome"] = $nome;
                $_SESSION["senha"] = $senha;
            }
        echo "</main>";
    ?>
    <p>
        <a href= "exibir.php">Exibir</a>
        <a href= "logout.php">Sair</a>
    </p>
</body>
</html>