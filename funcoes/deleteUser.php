<?php
    ini_set('display_errors', 1);

    require_once("funcoesCliente.php");
    
    $id = (integer)$_GET['userId'];
    
    deleteUser($id);

   //a funçao delete esta funcionando normalmente no index, mas nao consegui fazer ela funcionar aqui
?>