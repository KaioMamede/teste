<?php
    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nomeProduto = $_POST['nomeProduto'];
        $precoProduto = $_POST['precoProduto'];
        $estoque = $_POST['estoque'];

        $result = mysqli_query($conexao, "INSERT INTO produtos(nomeProduto,precoProduto,estoque) VALUES ('$nomeProduto','$precoProduto','$estoque')");

        header('Location: listagem.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD Produtos</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #2980B9; 
            background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);
        }
        .box{
            background-color: #fff;
            border: 1px solid #2980B9;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 15px;
            color: #2980B9;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border: 1px solid #2980B9;
            border-radius: 15px;
            width: 90%;
        }
        .inputSubmit{
            background-color: #2980B9;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        h3{
            text-align: center;
        }

    </style>
</head>
<body>
<a href="index.php">Voltar</a>
    <div class="box">
        <form action="cdProdutos.php" method="POST">
                <h1>Cadastre seu Produto!</h1>
                <br>
                <input type="text" name="nomeProduto" id="nomeProduto" placeholder="Nome" required>
                <br><br>

                <input type="text" name="precoProduto" id="precoProduto" placeholder="Preço" required>
                <br><br>    

                <input type="text" name="estoque" id="estoque"placeholder="Estoque" required>
                <br><br>

                <input type="submit" name="submit" id="submit" class="inputSubmit" class>
                <br><br>

                <h3>Já cadastrou o produto?</h3>
                <input type="button" name="submit" id="submit" class="inputSubmit" value="Vá direto para o registro" onclick="window.location.href = 'listagem.php'">

        </form>
    </div>
</body>
</html>