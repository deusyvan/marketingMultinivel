<?php
function  listar($id, $limite){
    $lista = array();
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id_pai = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        //usaremos a propria função para pegar os usuários filhos
        foreach ($lista as $chave => $usuario){
            if ($limite > 0) {
                $lista[$chave]['filhos'] = listar($usuario['id'], $limite-1);
            }
        }
    } 
    
    return $lista;
}