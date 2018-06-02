<?php
session_start();
require 'config.php';
require 'funcoes.php';

$sql = "SELECT id FROM usuarios";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0){
    $usuarios = $sql->fetchAll();
    foreach ($usuarios as $chave => $usuario) {
        $usuarios[$chave]['filhos'] = calcular_cadastros($usuario['id'], $limite);
    }
}

echo '<pre>';
print_r($usuarios);