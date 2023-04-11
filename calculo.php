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
        echo "<body style='background-color:gray'>";
        echo "<strong><h1>Cálculo de Mensalidade</h1></strong>";
        echo "<hr size = '3' color = 'white' width = '25%' align = 'left'>";
        $nome = "<i>Ana Clara Maximino</i>";
        $anual = 2100.50;
        $ano = 2023;
        $parcela = 6;
        echo "<strong>Nome do aluno.................: </strong>", $nome;
        echo "<br>";
        echo "<b>Valor do curso..................: </b>", "R$", number_format($anual,2,",",".");
        echo "<br>";
        echo "<b>Ano....................................: </b>", $ano;
        echo "<br>";
        echo "<b>Quantidade de parcelas...: </b>", $parcela;
        echo "<br>";
        $mensalidade = $anual / $parcela;
        echo "<u><b>Mensalidade......................: </b></u>", $mensalidade;
        echo "<br>";
        echo "<br>";
        echo "<b><h1>Tipos de Variáveis: </h1></b>";
        echo "<hr size = '3' color = 'white' width = '25%' align = 'left'>";
        echo "<br>";
        echo "<b>Nome :</b>", var_dump($nome);
        echo "<br>";
        echo "<b>Valor anual :</b>", var_dump($anual);
        echo "<br>";
        echo "<b>Parcelas :</b>", var_dump($parcela);
    ?>
</body>
</html>