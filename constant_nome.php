<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant php</title>
</head>
<body>
    <?php
        echo "<h3 align = 'center'>Exemplo de Constant em PHP</h3><hr>";
        //Definiçao da constant
        define("linguagem", "PHP - Linguagem Dinâmica");
        echo "<strong>Linguagem: </strong>" . linguagem;

        define("caracteristica", "A característica da linguagem PHP, é que a mesma necessita de servidor para interpretar, ou seja compilar o código");
        echo "<p>" . caracteristica . "</p>";
    ?>
</body>
</html>