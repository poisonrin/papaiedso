<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números randômicos utilizando For</title>
</head>
<body>
    <?php
        echo "<h3>NÚMEROS RANDÔMICOS - LOOPING FOR</h3>";
        $numero = 0;
        for ($i = 1; $i < 7; $i++)
        {
            $numero = rand(1, 10); //comando rand, gera numeros randomicos
            echo "Numero $i gerado foi: " . $numero . "<br>";
        }
        echo "<hr><h2>Fim do Looping <strong><em>FOR</em></strong></h2>";
    ?>
</body>
</html>