<?php
    session_start();
    require 'config.php';
?>

<h1>Cadastrar Novo Usuário</h1>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>
	
	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>
	
	<input type="submit" value="Cadastrar" /><br/><br/>

</form>
    