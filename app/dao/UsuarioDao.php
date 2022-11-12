<?php

include_once('../conection/Conection.php');
class UsuarioDao{
    public function getUser($login, $password){
        try{
            $sql = "SELECT * FROM usuarios WHERE login = :login and password = :password;";

            $prepared_sql = Conection::getConection()->prepare($sql);

            $prepared_sql->bindValue(":login", $login);
            $prepared_sql->bindValue(":password", $password);

            $prepared_sql->execute();
            $usuarios = $prepared_sql->fetchAll(PDO::FETCH_ASSOC);
            $usuario = NULL;

            if(sizeof($usuarios)==1){
                $usuario = new Usuario();
                $array = $usuarios[0];
                $usuario->setLogin($array['login']);
                // $usuario->setPassword($array['password']);
                $usuario->setName($array['name']);
                $usuario->setEmail($array['email']);
                $usuario->setDt_access($array['dt_access']);
                // $usuario->setBo_deleted($array['bo_deleted']);
            }

            return $usuario;
        }catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function login($login, $password){
        $usuario = NULL;
        try{
            $usuario = $this->getUser($login , sha1($password));
            echo sha1($password);
            if($usuario != NULL)
                $_SESSION['user'] = $usuario;
            
        }catch (Exception $e) {
            echo "deu ruim ".$e;
        }finally{
            return $usuario;
        }
    }
}

?>

