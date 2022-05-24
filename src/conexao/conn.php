<?php

$hostname = "sql102.epizy.com";
$database = "epiz_31454080_rifas";
$username = "epiz_31454080";
$password = "b367a3rTdTV";

try {
    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}
