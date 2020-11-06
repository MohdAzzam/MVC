<?php

namespace MVC\models;

use MVC\core\model;
use PDO;

class user extends model
{
    public function getAllUsers()
    {
        $data =  model::db()->run("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetUser($email, $password)
    {
        $data =  model::db()->run("SELECT * FROM user WHERE `email`='$email' AND `password`='$password'")->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function addUser($name,$email,$password){
        $data= model::db()->insert('user',['name'=>$name,'email'=>$email,'password'=>$password]);
        
    }
}
