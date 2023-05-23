<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Campeonato</title>
    <link rel="Stylesheet" href= "avaliativa.css">
</head>
<body>
    <?php
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $nickname = $_POST["nickname"];
            $id = $_POST["id"];
            $dia = $_POST["dia"];
    ?>
    <form name='principal' method='post' action='avaliativa.php'>
            <table>
                <h2><strong>Cadastro para Campeonato</strong></h2>
                <h3>Dados Pessoais</h3>

                <tr>
                    <td><label for='nome'>Nome:</label></td>
                    <td><input type='text' name='nome' size='40' maxlenght='50' required
                            placeholder='Informe o nome do candidato'></td>
                </tr>
                <tr>
                    <td><label for='email'>E-mail</label></td>
                    <td><input type='text' name='email' size='40' maxlenght='50' required
                            placeholder='Informe o e-mail do candidato'></td>
                </tr>
            </table>
            <table>
                <h3>Dados da Conta</h3>

                <tr>
                    <td><label for='nickname'>Nickname:</label></td>
                    <td><input type='text' name='nickname' size='40' maxlenght='20' required
                            placeholder='Informe o nickname do candidato'></td>
                </tr>
                <tr>
                    <td><label for='id'>Id:</label></td>
                    <td><input type='number' name='id' size='40' maxlenght='20' required
                            placeholder='Informe o id do candidato'></td>
                </tr>
            </table>
            <table>
                <h3>Dia escolhido</h3>
                <tr>
                    <td><label for='dia'>Dia:</td>
                    <td>
                        <select name="dia">
                            <option value="#"></option>
                            <option value="d1">20/06</option>
                            <option value="d2">20/07</option>
                            <option value="d3">20/08</option>
                        </select>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td colspan='2' align='center'>
                        <input type="submit" value='Cadastrar' name='cadastrar' class= 'botao'>
                    </td>
                </tr>
            </table>
    
    <h2>Dados Coletados</h2>

    <?php
            echo "Nome: " . $nome . "<br>";
            echo "E-mail: " . $email . "<br>";
            echo "Nickname: " . $nickname . "<br>";
            echo "Id: " . $id . "<br>";

            if ($dia == "d1"){
                echo "Data: 20/06 <br>";
            }
            else if ($dia == "d2"){
                echo "Data: 20/07<br>";
            }
            else if ($dia == "d3"){
                echo "Data: 20/08 <br>";
            }
    ?>
                
</body>
</html>