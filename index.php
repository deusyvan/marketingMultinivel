<?php 
    session_start();
    require 'config.php';
    
    //verificando se existe um usuario logado
    if (empty($_SESSION['mmnlogin'])) {
        header("Location: login.php");
        exit;
    }
