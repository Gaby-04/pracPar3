

<?php


if ($boolUser == true) {
        header("Content-type: application/json; charset=utf-8");
        echo $user;
}else{
        header("Content-type: application/json; charset=utf-8");
        echo $getData;
}


?>