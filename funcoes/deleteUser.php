<?php
    ini_set('display_errors', 1);

    require_once("funcoesCliente.php");
    
    $id = (integer)$_GET['userId'];
    
    deleteUser($id);

   
?>