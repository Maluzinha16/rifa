<?php

include('../../conexao/conn.php');

$requestData = $_REQUEST;

if (empty($requestData['NOME'])) {

    $dados = array (
        
        "tipo" => 'error',
        "mensagem" => 'Existe(m) campos(s) obrigatório(s) não preenchido(s).'

    );

} else {

    $ID = isset($requestData['ID']) ? $requestData['ID'] : '';
    $operacao = isset($requestData['operacao']) ? $requestData['operacao'] : '';

    if ($operacao == 'insert') {

        try {

            $stmt = $pdo->prepare('INSERT INTO TIPO (NOME) VALUES (:a)');
            $stmt->execute(array(
                ':a' => utf8_decode($requestData['NOME'])
            ));
            $dados = array (
                
            );

        }

    }

}

echo json_encode($dados);