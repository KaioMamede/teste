<?php
    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Endereco: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,endereco) VALUES ('$nome','$senha','$email','$telefone','$endereco')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD Mercado</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
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
        }
        .submit{
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
    <div class="box">
        <form action="cadastro.php" method="POST">
                <h1>Cadastre-se!</h1>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <br><br>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <br><br>    
                <input type="text" name="senha" id="senha" placeholder="Senha" required>
                <br><br>
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required>
                <br><br>
                <input type="text" name="endereco" id="endereco" placeholder="Endereço" required>
                <br><br>
                <input type="submit" name="submit" id="submit" class="submit">
        </form>
    </div>
</body>
</html>