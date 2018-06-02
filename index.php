<?php 
    session_start();
    require 'config.php';
    
    //verificando se existe um usuario logado
    if (empty($_SESSION['mmnlogin'])) {
        header("Location: login.php");
        exit;
    }
    
    //Recuperando o id
    $id = $_SESSION['mmnlogin'];
    
    //buscando o nome pelo id
    $sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    
    //verificando se o id existe
    if ($sql->rowCount() > 0) {
        //traz o nome
        $sql = $sql->fetch();
        $nome = $sql['nome'];
    } else {
        header("Location: login.php");
        exit;
    }
    
?>
<h1>Sistema de Marketing Multinível</h1>
<h2>Usuário logado: <?php echo $nome ?></h2>

<a href="cadastro.php">Cadastrar Novo Usuário</a>