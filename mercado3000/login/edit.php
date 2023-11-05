<?php
    if(!empty($_GET['idProduto']))
    {

        include_once('config.php');

        $idProduto = $_GET['idProduto'];

        $sqlSelect = "SELECT * FROM produtos WHERE idProduto=$idProduto";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nomeProduto = $user_data['nomeProduto'];
                $precoProduto = $user_data['precoProduto'];
                $estoque = $user_data['estoque'];
            }
        }
        else
        {
            header('Location: listagem.php');
        }

    }
    else
    {
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
        #update{
            background-color: #2980B9;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <a href="listagem.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
                <h1><b>Edite seu Produto!</b></h1>
                <br>
                <input type="text" name="nomeProduto" id="nomeProduto" value="<?php echo $nomeProduto ?>" required>
                <br><br>

                <input type="text" name="precoProduto" id="precoProduto" value="<?php echo $precoProduto ?> "required>
                <br><br>   

                <input type="text" name="estoque" id="estoque" value="<?php echo $estoque ?>" required>
                <br><br>
                <input type="hidden" name="idProduto" value="<?php echo $idProduto ?>">
                <input type="submit" name="update" id="update" class="inputSubmit" value="Editar">
        </form>
    </div>
</body>
</html>