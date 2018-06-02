<?php
    session_start();
    require 'config.php';
    
    if (!empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        
       //buscando e-mail e senha no banco de dados
       $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha :senha");
       $sql->bindValue(":email", $email);
       $sql->bindValue(":senha", $senha);
       $sql->execute();
       
       
       
    }
?>

<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"><br/><br/>
	
	Senha:<br/>
	<input type="password" name="senha"><br/><br/>
	
	<input type="submit" value="Entrar">
</form>