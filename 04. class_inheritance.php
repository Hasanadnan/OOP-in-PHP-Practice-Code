<?php

class first {
    public $id = 25;
    public $name = "Hasan";
    protected $name2 = "HasanAli";

    public function saySomething ($word) {
        echo $word;
    }
}

class second extends first {
    public function secondFun() {
        echo "<br>";
        echo $this->name2;
    }

}

//call
$second = new second;

//use method 
$second->saySomething('I am Second Class');
$second->secondFun();

//use Propertices
echo "<br>";
echo $second->name;




?>
