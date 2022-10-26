<?php

class User
{

    public function showUsers()
    {
        $userDir = "users.php";
        return $userDir;
    }
    public function getUsers(){
        $data = file_get_contents("users.json");
        return $data;
    }
    public function oneUser($json, $arr, $id, ){
        $arryList = array(
            'nombre' => $json[$arr][$id]['nombre'],
            'apellido' => $json[$arr][$id]['apellido'],
            'edad' => $json[$arr][$id]['edad'],
            'telefono' => $json[$arr][$id]['telefono'],
            'email' => $json[$arr][$id]['email'],
            'password' => $json[$arr][$id]['password'],
            'cargo' => $json[$arr][$id]['cargo'],
            'nacionalidad' => $json[$arr][$id]['nacionalidad'],
        );
        return $oneUser = json_encode($arryList,true);
    }
}