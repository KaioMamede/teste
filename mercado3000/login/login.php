<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #2980B9; 
            background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);
        }
        div{
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
    <div class="tela-login">
        <h1>Faça Log in!</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            <br><br>
            <h3>Não possui cadastro?</h3>
            <input class="inputSubmit" type="button" value="Cadastre-se" onclick="window.location.href = 'cadastro.php'">
        </form>
    </div>
</body>
</html>