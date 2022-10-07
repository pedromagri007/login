<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'logindb';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Efetuado";
    //}

        //print_r($_REQUEST);
     
?>