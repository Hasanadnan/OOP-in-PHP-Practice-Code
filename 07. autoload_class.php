<?php

spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$autoLoad1 = new autoload_test1;
$autoLoad2 = new autoload_test2;

$autoLoad1->testOne();
echo "<br>";
$autoLoad2->testTwo();



?>