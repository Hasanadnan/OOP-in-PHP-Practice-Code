<?php

//final use koreci tai error dekhabe result bcz final mane 
//tar r kono child thakte parbe na
final class autoload_test1{
    public function testOne() {
        echo "auto Load test One its me";
    }
}
class autoload_test2 extends autoload_test1{
    public function testTwo() {
        echo "auto Load test Two its me";
    }
}

$final1 = new autoload_test2;
$final1->testTwo();
echo "<br>";
$final1->testOne();



?>