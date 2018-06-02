<?php
    try {
        global $pdo;
        $pdo = new PDO("mysql:dbname=multinivel;host=localhost", "admin", "admin");
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
    
    $limite = 3;