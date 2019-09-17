<?php
    ini_set('display_errors', 1);
    require_once("funcoesCliente.php");
?>

<html>
    <head>
    </head>
    <body>
        <form action="insertUser.php" method="POST">
        <p>
            Nome:  <input type="text" name="user"/>
        </p>
        <p>
            Senha: <input type="password" name="pass"/>
        </p>
        <p>
            <input type="submit" value="criar" />
        </p>
    </body>
</html>

<?php
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    insertUser($name, $pass);
?>