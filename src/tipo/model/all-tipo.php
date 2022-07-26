<?php
    include('../../conexao/conn.php');

    $sql = "SELECT * FROM TIPO ORDER BY NOME DESC";

    $resultado = $pdo
