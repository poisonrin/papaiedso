<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois números - Formulário</title>
    <style type="text/css">
        h3{
            color:purple;
            border-bottom:2px solid purple;
            font-size:20px;
            width:200px;
        }
        label, input{
            color:purple;
        }
        input{
            margin-left:5px;
        }
    </style>


</head>
<body>
    <?php
        echo "<h3>Soma de dois números</h3>";
        echo "<form name = 'soma' method= 'post' action= 'Exibir_Soma.php'>";
        echo "<p>";
            echo "<label for = 'numero1'>Número 1:</label>";
            echo "<input type = 'text' name= 'num1' size= 4 maxlength= 4 requiered>";
        echo "</p>";
        echo "<p>";
            echo "<label for = 'numero2'>Número 2:</label>";
            echo "<input type = 'text' name= 'num2' size= 4 maxlength= 4 requiered>";
        echo "</p>";
        echo "<p>";
            echo "<input type = 'submit' value= 'somar' name= 'soma'>";
            echo "<input type = 'reset' value= 'limpar' name= 'limpa'>";
        echo "</p>";
        echo "</form>";
    ?>
</body>
</html> 
