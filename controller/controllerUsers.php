<?php

class controllerUsers{

    public function save($data){
        try{
            echo "e";
            $modelUsers = new modelUsers();
            return $modelUsers->save($data);

        }catch(PDOException $e){
            return false;
        }
    }
}

?>