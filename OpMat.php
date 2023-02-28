<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>Operadores Matemáticos Entre Dois Números</h3>";
        echo "<hr size = '3' color = '#ff0000' width = '25%' align = 'left'>";
        $numero1 = 10;
        $numero2 = 15;
        echo "numero 1: ".$numero1;
        echo "<br>";
        echo "numero 2: ".$numero2;
        echo "<br>";
        echo "<hr size = '3' color = '#ff0000' width = '25%' align = 'left'>";
        $soma = $numero1 + $numero2;
        $sub = $numero1 - $numero2;
        $mult = $numero1 * $numero2;
        $div = $numero1 / $numero2;
        echo "soma = ", $soma;
        echo "<br>";
        echo "subtração = ", $sub;
        echo "<br>";
        echo "multiplicação = ", $mult;
        echo "<br>";
        echo "divisão = ", $div;
        echo "<hr size = '3' color = '#ff0000' width = '25%' align = 'left'>";
        echo "<h4>Exibindo o tipo da variável</h4>";
        echo var_dump($numero1);
        echo var_dump($numero2);
    ?>
</body>
</html>