<?php

    class Fruit {
        // Properties
        public $name;
        public $color;
        private $taste;
        private $weight;
        protected $shape;

        //Constructor
        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        //Destructor
        function __destruct(){
            echo "The name of the fruit is {$this->name} and its color is {$this->color} and it is {$this->taste}";
        }

        // Methods
        // Getter & Setter Methods
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this->color = $color;
        }
        function get_color(){
            return $this->color;
        }
        function set_taste($taste){
            $this->taste = $taste;
        }
        function get_taste(){
            return $this->taste;
        }
        
    }

    $apple = new Fruit("Apple", "Blue");
    $apple->color = "Pink";
    $apple->set_taste("Sour");

?>