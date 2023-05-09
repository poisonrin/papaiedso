<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre as funções include e require</title>
</head>
<body>
    <?php
        require "cabecalho.php";
            echo "<p>";
                echo "A função include como o require permite importar informações de um arquivo.
                A diferença é que ao utilizarmos a <strong>função include</strong>, o bloco de códigos não é interrompido quando 
                existe algum erro ao chamar o arquivo, ao contrário da
                <strong>função require</strong>!";
            echo "</p>";
    ?>
</body>
</html>