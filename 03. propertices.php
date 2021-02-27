<?php

class User {

    // propertiecs
    public $username;
    public $password;

    //contructor
    public function __construct($username, $password)
    {
        // use porpertices
        $this->username = $username;
        $this->password = $password;
        echo "Constructor Fast Called";
        echo "<br />";
    } 

    // //method
    // public function login($username, $password) {
    //     // use porpertices
    //     $this->username = $username;
    //     $this->password = $password;

    //     $this->register();
    // }

                     // or

     //method
    public function login() {

        $this->register();
    }                 


    //method
    public function register() {
        echo $this->username . " User Registerd";
        echo "<br />";
    }
    
    //Destructor
    public function __destruct()
    {
        echo "Destruct last Called";
    }

}



// Called Class 
$user = new User('hasan', 1234);

// Use 

// $user->login('hasan', 1234); 


// or 
$user->login();


 ?>   