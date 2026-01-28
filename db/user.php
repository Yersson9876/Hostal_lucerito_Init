<?php

include_once 'db_con.php';

class User extends DB{

    private $nombre;
    private $username;

    public function userExists($user,$pass){
        $md5pass = md5($pass);
        //$md5pass = $pass;
        
        $query = $this->connect()->prepare('SELECT * FROM t_usuario WHERE id_usuario = :user AND contraseña = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);
        
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}
?>