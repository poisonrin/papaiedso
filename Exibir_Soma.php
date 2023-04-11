<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula e exibe a soma</title>
</head>
<body>
    <?php
        echo "<h3>Calcula e exibe a soma</h3>";
        $numero1 = $_POST["num1"]; 
        //recupera o conteudo digitado na caixa da pagina soma
        $numero2 = $_POST["num2"];
        echo "Numero 1: " .$numero1;
        echo "<br>";
        echo "Numero 2: " .$numero2;
    ?>
</body>
</html>