<?php

    include_once('config.php');

    if(isset($_POST['update']))  
    {
        $idProduto = $_POST['idProduto'];
        $nomeProduto = $_POST['nomeProduto'];
        $precoProduto = $_POST['precoProduto'];
        $estoque = $_POST['estoque'];

        $sqlUpdate = "UPDATE produtos SET nomeProduto='$nomeProduto',precoProduto='$precoProduto',estoque='$estoque' WHERE idProduto='$idProduto'";

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: listagem.php');

?>