<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora em php</title>
</head>
<body>
    <?php
        // define as variaveis para receber o dia, o mês e o ano
        $dia = date("d"); // extrai o dia da função date
        $mes = date("m"); // extrai o mes da função date
        $ano = date("y"); // extrai on ano da função

        // exibe a data do sistema operacional 
        echo "hoje é dia " . $dia . "/" . $mes . "/" . $ano . "<br>";

        // define as variáveis para receber a hora, minuto e o segundo
        $hora = date("h"); // extrai a hora da função date
        $minuto = date("i"); // extrai o minuto da função date
        $segundo = date("s"); // extrai o segundo da função date

        // exibe a hora do sistema operacional
        echo "são " . $hora . " horas " . " " . $minuto . " minutos e ". $segundo . " segundos";
    ?>
</body>
</html>