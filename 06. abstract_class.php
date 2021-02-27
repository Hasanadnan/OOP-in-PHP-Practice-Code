<?php
//abstract Class
abstract class Animal {
    public $name;
    public $color;

    protected function describe(){
        return $this->name . ' is ' . $this->color;
    }
    
    // abstract method 
    abstract public function makeSound();
}

class Duck extends Animal {
    public function describe()
    {
        return parent::describe();
    }

    // abstract method use : ai method jehetu parent a ase tai ditei hobe
    public function makeSound()
    {
        return 'Quack';
    }
}

class Dog extends Animal {
    public function describe()
    {
        return parent::describe();
    }

     // abstract method use : ai method jehetu parent a ase tai ditei hobe
    public function makeSound()
    {
        return 'Bark';
    }
}


// abstract class a kokohoni object  create kora jay na 


//child class Object Create
$animal = new Duck();

// data pass in abstract class 
$animal->name ='Ben';
$animal->color='Pink';

// method call 
echo $animal->describe();
echo "<br>";
echo $animal->makeSound();
echo "<br>";
echo "<br>";

$animal = new Dog();
$animal->name ='Larry';
$animal->color='Black';
echo $animal->describe();
echo "<br>";
echo $animal->makeSound();

?>