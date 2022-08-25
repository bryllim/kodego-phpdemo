<?php

class Pet{

    public $name;
    private $breed;
    private $color;
    private $size;

    private $isNeutered=false;

    public function eat(){
        echo "{$name} is eating.";
    }

    // Getters & setters
    public function set_breed($value){
        $this->breed = $value;
    }
    public function get_breed(){
        return $this->breed;
    }
    public function set_color($value){
        $this->color = $value;
    }
    public function get_color(){
        return $this->color;
    }
    public function set_size($value){
        $this->size = $value;
    }
    public function get_size(){
        return $this->size;
    }
    public function toggle_isNeutered(){
        $this->isNeutered = !$this->isNeutered;
    }
    public function get_isNeutered(){
        return $this->isNeutered;
    }

    public function displayDetails(){
        return "This is ". ((preg_match('/^[aeiou]/i', $this->breed[0])) ? "an" : "a") ." {$this->breed} and his/her name is {$this->name} and its color is {$this->color} and it is {$this->size} and it is neutered: {$this->isNeutered}";
    }

}

class Dog extends Pet{

    public function bark(){
        echo "Aw aw!";
    }

    public function fetch(){
        echo "Fetching sir! Awoo";
    }

}

class Cat extends Pet{

    public function meow(){
        echo "Ming ming!";
    }

}

$dog = new Dog();
$dog->name = "Bantay";
$dog->set_breed("Aspin");
$dog->set_color("Brown");
$dog->set_size("XXL");
$dog->toggle_isNeutered();
echo $dog->displayDetails();
echo "<hr>";
$dog->fetch();


?>