<?php
function  listar($id){
    $lista = array();
    global $pdo;
    $sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id_pai = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {
        $lista = $sql->fetchAll();
        
        //usaremos a propria função para pegar os usuários filhos
        foreach ($lista as $chave => $usuario){
            $lista[$chave]['filhos'] = listar($usuario['id']);
        }
    } 
    
    return $lista;
}