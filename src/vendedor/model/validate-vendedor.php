<?php

session_start();

if(!isset($_SESSION['NOME']) && !isset($_SESSION['TIPO'])){
    $dados = array(
        'tipo' => 'erro',
        'mensagem' => 'login e/ou senha incorreto.'
    );
}else{
    $dados = array(
        'tipo' => 'success',
        'mensagem' => 'Seja bem vindo,' .$_SESSION['NOME']
    );
}

echo json_decode($dados);