<?php
    session_start();
    require 'config.php';
    
    if (!empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));
        
       //buscando e-mail e senha no banco de dados
       $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha :senha");
       $sql->bindValue(":email", $email);
       $sql->bindValue(":senha", $senha);
       $sql->execute();
       
       //compara se existe o usuario
       if ($sql->rowCount() > 0){
           //Existindo faz um fetch retorna o resultado
           $sql = $sql->fetch();
           
           //Depois salva o id na sessão
           $_SESSION['mmnlogin'] = $sql['id'];
           
           //redireciona para index
           header("Location: index.php");
           exit;
           
       } else {
           echo "Usuário e/ou Senha inválidos!";
       }
       
    }
?>

<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"><br/><br/>
	
	Senha:<br/>
	<input type="password" name="senha"><br/><br/>
	
	<input type="submit" value="Entrar">
</form>