<?php
    include_once('config.php');
    $sql = "SELECT * FROM produtos ORDER BY idProduto DESC";

    $result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>registro</title>
    <style>
        body{
            background: #2980B9; 
            background: -webkit-linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9); 
            background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);
            color: white;

        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        h1{
            text-align: center;
            background: #fff;
            color: #2980B9;
            border: 1px solid #2980B9;
            padding: 12px;
            font-weight: bold;
        }
        .voltar1{
            width: 100px;
            height: 50px;
            color: #2980B9;
            background: #fff;
            font-weight: bold;
            position: absolute;
            top: 10px;
            left: 50px;
            text-align: center;
            border-radius: 10px
        }
        .voltar2{
            width: 100px;
            height: 50px;
            color: #2980B9;
            background: #fff;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 50px;
            text-align: center;
            border-radius: 10px
        }
    </style>
</head>
<body>
    <a class="voltar1" href="cdProdutos.php">PAGINA CADASTRO</a>
    <a class="voltar2" href="index.php">PAGINA INICIAL</a>
    <h1>REGISTO DE PRODUTOS</h1>
    

    <div class="m-5"><!--NAO TEM COMO FAZE NAO TEM CSS-->
    <table class="table text-white table-bg">  <!--NAO TEM COMO FAZE NAO TEM CSS-->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preco</th>
      <th scope="col">Estoque</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  
  <tbody>
    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$user_data['idProduto']."</td>";
            echo "<td>".$user_data['nomeProduto']."</td>";
            echo "<td>".$user_data['precoProduto']."</td>";
            echo "<td>".$user_data['estoque']."</td>";
            echo "<td>
                <a class='btn btn-sm btn-primary' href='edit.php?idProduto=$user_data[idProduto]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                    </svg>
                </a>
                <a class='btn btn-sm btn-danger' href='delete.php?idProduto=$user_data[idProduto]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                    </svg>
                </a>
            </td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>