<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrementando e Decrementando</title>
</head>
<body>
    <?php
        echo "<h3>Incrementando</h3>";
        $contador = 0; // define a variavel $contador iniciando como 0
        echo "Variável <strong>contador</strong> inicializando: " . $contador;

        $contador+=1; //incrementando mais um na variavel contador
        echo "<p>Valor da variável <strong>contador</strong> com incremento de $contador" . "</p>";
        
        $contador+=5;
        echo "<p>Valor da variável <strong>contador</strong> com incremento de 5 é igual a $contador" . "</p>";

        echo "<h3>Decrementando</h3>";
        $contador-=2;
        echo "<p>Valor da variável <strong>contador</strong> com decremento de 2 é igual a $contador" . "</p>";
        

    ?>
</body>
</html>