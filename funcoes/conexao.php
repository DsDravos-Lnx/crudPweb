<?php  

    function createDB(){
        try {
            $db = new PDO('sqlite:banco/banco.sqlite');
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            return $db;
        } catch (\PDOException $e) {
            $e->getMessage();
            return 0;
        }
        
        return -1;
    }

?>