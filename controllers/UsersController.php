<?php

class UsersController
{
    public function showUsers(){
        require_once "models/Users.php";
        $u = new User;
        $userDir = $u->showUsers();
        $getData = $u->getUsers();
        $data = json_decode($getData,true);
        $url = $_GET['id'];
        $boolUser = false;
        if(isset($_GET['id'])){
            $boolUser = true;
            $user = $u->oneUser($data,'usuarios',$url);
        }
        
        require_once "views/".$userDir;
    }
}