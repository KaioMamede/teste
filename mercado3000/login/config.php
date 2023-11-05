<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '1234';
    $dbName = 'mercado';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if ($conexao -> connect_errno) {
    //     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    //     exit();
    //   }
    //   else{
    //     echo"conexao ta boa prosseguimos";
    //   }
?>