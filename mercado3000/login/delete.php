<?php

    if(!empty($_GET['idProduto']))
    {
        include_once('config.php');

        $idProduto = $_GET['idProduto'];

        $sqlSelect = "SELECT * FROM produtos WHERE idProduto=$idProduto";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produtos WHERE idProduto=$idProduto";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: listagem.php');

?>