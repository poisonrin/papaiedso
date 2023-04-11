<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita</title>
    <style type="text/css">
        html{
            background-color: white;
        }
        h2{
            background-color: gray;
            color:white;
            width: 12%;
            margin-bottom: 4px;
            text-align: center;
        }
        p{
            width: 12%;
            text-align: center;
        }
        h4{
            background-color: gray;
            color:white;
            width: 12%;
            text-align: center;
        }
        label, input{
            color:black;
        }
        input{
            margin-left:5px;
        }
    </style>
</head>
<body>
    <?php
        echo "<form name = 'soma' method= 'post' action= 'receita.php'>";
        echo "<h2>Controle de Gastos</h2>";
        echo "<h6>";
            echo "<h4>Receitas</h4>";
            echo "<p>";
                echo "<label for = 'receita1'>Receita 1:</label>";
                echo "<input type = 'text' name= 'receita1' size= 4 maxlength= 4 required>";
            echo "</p>";
            echo "<p>";
                echo "<label for = 'receita2'>Receita 2:</label>";
                echo "<input type = 'text' name= 'receita2' size= 4 maxlength= 4 required>";
            echo "</p>";
            echo "<h4>Despesas</h4>";
            echo "<p>";
                echo "<label for = 'despesa1'>Despesa 1:</label>";
                echo "<input type = 'text' name= 'despesa1' size= 4 maxlength= 4 required>";
            echo "</p>";
            echo "<p>";
                echo "<label for = 'despesa2'>Despesa 2:</label>";
                echo "<input type = 'text' name= 'despesa2' size= 4 maxlength= 4 required>";
            echo "</p>";
            echo "<p>";
                echo "<label for = 'despesa3'>Despesa 3:</label>";
                echo "<input type = 'text' name= 'despesa3' size= 4 maxlength= 4 required>";
            echo "</p>";
            echo "<p>";
                echo "<label for = 'despesa4'>Despesa 4:</label>";
                echo "<input type = 'text' name= 'despesa4' size= 4 maxlength= 4 required>";
            echo "</p>";
        echo "</h6>";
        echo "<p>";
            echo "<input type = 'submit' value= 'somar' name= 'soma'>";
            echo "<input type = 'reset' value= 'limpar' name= 'limpa'>";
        echo "</p>";
        echo "</form>";
        echo "<h4>Soma das Receitas</h4>";
        $r1 = $_POST["receita1"]; 
        $r2 = $_POST["receita2"];
        echo "Receita 1: " .$r1;
        echo "<br>";
        echo "Receita 2: " .$r2;
        echo "<br>";
        echo "<strong>Total das receitas: </strong>" .$r1 + $r2;
        echo "<hr>";

        echo "<h4>Soma das Despesas</h4>";
        $d1 = $_POST["despesa1"]; 
        $d2 = $_POST["despesa2"];
        $d3 = $_POST["despesa3"];
        $d4 = $_POST["despesa4"];
        echo "Despesa 1: " .$d1;
        echo "<br>";
        echo "Despesa 2: " .$d2;
        echo "<br>";
        echo "Despesa 3: " .$d3;
        echo "<br>";
        echo "Despesa 4: " .$d4;
        echo "<br>";
        echo "<strong>Total das despesas: </strong>" .$d1 + $d2 + $d3 + $d4;
        echo "<hr>";
        if ($r1+$r2 < $d1 + $d2 + $d3 + $d4){
            echo "Débito";
        }
        else {
            echo "Crédito";
        }
            

    ?>
</body>
</html>