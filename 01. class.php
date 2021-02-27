<?php

class User {
    public function __construct()
    {
        echo "Constructor Called";
        echo "<br />";
    } 

    public function login($username, $password) {
        $this->register($username, $password);
    }

    public function register($username, $password) {
        echo $username . " User Registerd";
        echo "<br />";
    }

    public function __destruct()
    {
        echo "Destruct Called";
    }

}



// Called Class 
$user = new User;

// Use 

$user->login('hasan', 1234);
 ?>   