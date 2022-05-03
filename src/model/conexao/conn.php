<?php


    $hostname = "sql102.epizy.com"; 
    $databname = "epiz_31454061_RIFAS"; 
    $username = "epiz_31454061"; 
    $password = "qYX6lIw4NTCj"; 

    if($conecta = mysqli_connect($hostname, $username, $password, $databname )){
        echo 'Conectado ao banco de dados '.$databname.'.....';
    } else {
        echo 'Erro: '.mysqli_connect_error();
    }