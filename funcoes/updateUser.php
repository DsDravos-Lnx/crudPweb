<?php
    ini_set('display_errors', 1);
    require_once("funcoesCliente.php");

?>

<html>
    <head>
    </head>
    <body>
        <form action="updateUser.php" method="POST">
        <p>
            ID:  <input type="text" name="id_cliente"/>
        </p>
        <p>
            Nome:  <input type="text" name="user"/>
        </p>
        <p>
            Senha: <input type="password" name="pass"/>
        </p>
        <p>
            <input type="submit" value="Update" />
        </p>
    </body>
</html>

<?php

    $id = $_POST['id_cliente'];
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    updateUser($id, $name, $pass);
?>