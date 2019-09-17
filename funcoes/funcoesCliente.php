<?php
    
    require_once("conexao.php");

    function getDadosUser(){
        
        $db = createDB();
        $sql = "SELECT * FROM cliente";
        $query = $db->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll();

        print "<table border=1>";
        print "<tr><td>id_cliente</td><td>user</td><td>pass</td><td>actions</td></tr>";

        foreach ($resultado as $row) {
            print "<tr><td>".$row->id_cliente."</td>";
            print "<td>".$row->user."</td>";
            print "<td>".$row->pass."</td>";
            print "<td> <button type='button'><a href='funcoes/updateUser.php?userId=$row->id_cliente'>update</button> </a> </td>";
            print "<td> <button type='button'><a href='funcoes/deleteUser.php?userId=$row->id_cliente'>delete</button> </td></tr>";
        }

        print "</table>";
    }

    function updateUser($id_cliente, $user, $pass){
        $db = createDB();
        $sql = "UPDATE  cliente SET user = :user, pass = :pass WHERE id_cliente = :id_cliente";
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id_cliente', $id_cliente);
            $query->bindParam(':user', $user);
            $query->bindParam(':pass', $pass);
            $query->execute();
        } catch (\PDOException  $e) {
            echo "erro ao atualizar cliente:". $e->getMessage();
        }

    }

    function deleteUser($id_cliente){
        $db = createDB();
        $sql = "DELETE FROM cliente WHERE id_cliente = :id_cliente";
                
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id_cliente', $id_cliente);
            $query->execute();
        } catch (\PDOException $e) {
            echo "erro ao deletar cliente: " . $e->getMessage();
        }
    }

    function insertUser($user, $pass){
        $db = createDB();
        $sql = "INSERT INTO cliente (user, pass) VALUES (:user, :pass)";
        try {
            $query = $db->prepare($sql);
            $param = array(':user'=>$user, ':pass'=>$pass);
            $query->execute($param);
            
        } catch (\PDOException $e) {
            echo "erro ao inserir cliente: ". $e->getMessage();
        }
    }

?>