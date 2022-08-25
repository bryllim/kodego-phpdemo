<?php

class Car{

    public $name;

    function __construct($name){
        $this->name = $name;
    }

    function printDetails(){
        echo "Car Name: {$this->name}";
    }

    final function honk(){
        echo "Beep!";
    }
}

class Toyota extends Car{

    public $country;

    function __construct($name, $country){
        $this->name = $name;
        $this->country = $country;
    }

    function printDetails(){
        echo "Car Name: {$this->name} - Country: {$this->country}";
    }
}

$toyota = new Toyota("Toyota", "Japan");
$ford = new Toyota("Ford", "USA");

$toyota->printDetails();
$ford->printDetails();
$toyota->honk();
?>