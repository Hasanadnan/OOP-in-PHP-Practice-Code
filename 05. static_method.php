<?php

class User {

    public $username;

    //static Propertice
    public static $minPassLength = 5;
    
    //static Method
    public static function validatePassword($password){
        if(strlen($password) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

//dircet argumet pass korteci kono Call er dorkar nei
$password ='password';

// direct class Method use korte parteci
if(User::validatePassword($password)) {
    echo 'password in Valid';
} else {
    echo 'Password is not valid';
}

// :: scope resulation Operator

echo "<br>";
//Dircet class er Propertices a excess nite parteci
echo User::$minPassLength;

?>