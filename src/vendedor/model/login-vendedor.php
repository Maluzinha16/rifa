<?php
include('../../conexao/conn.php');

$sql = $pdo->query("SELECT *, count(ID) as achou FROM VENDEDOR WHERE LOGIN = '").
$_REQUEST ['LOGIN']. "'AND SENHA = '" .md5($_REQYEST['SENHA']). "'");

while($resultado = $sql->fetch(PDO::FETCH_ASSOC)){
    if($resultado['achou'] == 1){
        session_start();
        $_SESSION['NOME'] = $resultado['NOME'];
        $_SESSION['TIPO'] = $resultado['TIPO_ID'];
        $dados = array(
            'tipo' => 'success',
            'mensagem' => 'login correto.'
        );
    }else{
        $dados = array(
            'tipo' => 'erro',
            'mensagem' => 'login e/ou senha incorreto.'
        );
    }
}

echo json_encode($dados);