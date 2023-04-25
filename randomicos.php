<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números randômicos utilizando While</title>
</head>
<body>
    <?php
        echo "<h3>NÚMEROS RANDÔMICOS - LOOPING WHILE</h3>";
        $numero = 0;
        $contador = 0;
        while (contador < 7)
        {
            $numero = rand(1, 10); //comando rand, gera numeros randomicos
            echo $numero;
            $contador++;
        }
    ?>
</body>
</html>