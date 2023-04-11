<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Bancário em PHP</title>
</head>
<body>
    <?php
        echo "<h3>Controle Bancário em PHP</h3><br>";
        $nome_banco = ""; //armazena o nome do banco
        $tipoDeConta = ""; //armazena o tipo de conta
        $nome_correntista = $_POST["nome"];
        echo "<strong>Nome do correntista: </strong>" . $nome_correntista;
        $banco = $_POST["banco"];
        if($banco == "caixa"){
            $banco = "Caixa econômica federal";
            echo "<br><strong>Nome do banco: </strong>" . $banco;
        }
        else if ($banco == "brasil"){
            $banco = "Banco do Brasil";
            echo "<br><strong>Nome do banco: </strong>" . $banco;
        }
        else if ($banco == "mercantil"){
            $banco = "Banco Mercantil";
            echo "<br><strong>Nome do banco: </strong>" . $banco;
        }
        else if ($banco == "santander"){
            $banco = "Banco Santander";
            echo "<br><strong>Nome do banco: </strong>" . $banco;
        }
        else if ($banco == "bradesco"){
            $banco = "Banco Bradesco";
            echo "<br><strong>Nome do banco: </strong>" . $banco;
        }
        else{
            echo "<br>Atenção, você deve cadastrar os dados primeiro!";
            echo "<p><a href= 'banco.php'>Cadastro da conta corrente</a></p>";
        }



    ?>
</body>
</html>
