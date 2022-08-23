<?php

class Car{
    private $brand;
    private $color;
    private $transmission;
    private $fuel;

    function __construct(){
        echo "Car created!";
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }
    
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getTransmission()
    {
        return $this->transmission;
    }

    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
        $this->soundHorn();

        return $this;
    }

    private function soundHorn()
    {
        echo "Beep beep!";
    }
}

$toyota = new Car();
$toyota->setBrand("Toyota");
$toyota->setColor("White");
$toyota->setTransmission("Automatic");
$toyota->setFuel("Diesel");

$ford = new Car();
$ford->setBrand("Ford");
$ford->setColor("Red");
$ford->setTransmission("Manual");
$ford->setFuel("Gas");

?>