<?php

require_once("../services/connectionDB.php");

class modelUsers{

    public function save($data){
        try{
            $nome_usuario = ($data["nome_usuario"]);
            $email = ($data["email"]);
            $telefone = ($data["telefone"]);
            $cpf = ($data["cpf"]);
            $senha = ($data["senha"]);
            $confirmar_senha = ($data["confirmar_senha"]);

            $conn = connectionDB::connect();
            $save = $conn->prepare("INSERT INTO app_nbpr.`usuario`(`nome_usuario`, `email`, `telefone`, `cpf`, `senha`, `confirmar_senha`)  VALUES (:nome_usuario, :email, :telefone, :cpf, :senha, :confirmar_senha)");
            $save->bindParam(":nome_usuario", $nome_usuario);
            $save->bindParam(":email", $email);
            $save->bindParam(":telefone", $telefone);
            $save->bindParam(":cpf", $cpf);
            $save->bindParam(":senha", $senha);
            $save->bindParam(":confirmar_senha", $confirmar_senha);
            $save->execute();

            return true;

        }catch(PDOException $e){
            return false;
        }
    }

}

?>