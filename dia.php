<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da semana</title>
</head>
<body>
    <?php
        echo "<h3>Dia da Semana - Estrutura Switch</h3>";
        $dia_semana = date("w");
        $mensagem = "";
        echo "<h3>Dia da Semana: " . $dia_semana ."</h3>";
        switch ($dia_semana)
        {
            case 0:
                $mensagem = "Domingo";
                break;
            case 1:
                $mensagem = "Segunda";
                break;
            case 2:
                $mensagem = "Terça";
                break;
            case 3:
                $mensagem = "Quarta";
                break;
            case 4:
                $mensagem = "Quinta";
                break;
            case 5:
                $mensagem = "Sexta";
                break;
            case 6:
                $mensagem = "Sábado";
                break;
            default:
                $mensagem = "Erro!";
                break;
        }
        echo "<h3>Hoje é ". $mensagem . "</h3>"
    ?>
</body>
</html>