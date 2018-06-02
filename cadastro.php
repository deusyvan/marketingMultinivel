<?php
    session_start();
    require 'config.php';
    
    if (!empty($_POST['nome']) && !empty($_POST['email'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $id_pai = $_SESSION['mmnlogin'];
        $senha = md5($email);
        
        
        
    }
?>


<h1>Cadastrar Novo Usuário</h1>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>
	
	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>
	
	<input type="submit" value="Cadastrar" /><br/><br/>

</form>
    