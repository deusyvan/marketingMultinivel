<?php
//Inicia a sessão e apaga a sessão mmnlogin redirecionando para login
session_start();
unset($_SESSION['mmnlogin']);
header("Location: login.php");
exit;