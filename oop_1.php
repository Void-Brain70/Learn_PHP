<?php
class Car{
    public $name = "Car";

    public function display(){
        echo $this-> name;
    }
}

$obj = new Car;
$obj-> display();

?>