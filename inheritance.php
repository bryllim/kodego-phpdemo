<?php

class Fruit{
	
	public $qty=10;
	protected $color;
	protected $name;

	private $shape;
	protected $code;

	public function __construct($name, $color, $shape=null, $code="000") {
	  $this->name = $name;
	  $this->color = $color;

	  $this->shape = $shape;
	  $this->code = $code;

	}
	
	public function set_name($value){
		$this->name = $value;
	}

	public function get_name(){
		return $this->name;
	}
	
	public function set_color($value){
		$this->color = $value;
	}

	public function get_color(){
		return $this->color;
	}

	public function set_shape($value){
		$this->shape = $value;
	}

	protected function get_shape(){
		return $this->shape;
	}

	public function set_code($value){

		if($value == "001"){
			$value = "010";
		}

		$this->code = $value;
	}

	public function get_code(){
		return $this->code;
	}
	
  }

  class Apple extends Fruit{

	public function __construct($shape,$color="Red"){

		// parent refers to the Fruit class
		// __construct also refers to the Fruit construct function
		parent::__construct("Apple",$color,$shape,"001");
	}

	public function get_name_and_color(){
		return $this->get_name(). " ". $this->get_color();
	}

	public function get_details(){
		return "{$this->get_code()} :: The fruit is {$this->get_name()} and the color is {$this->get_color()} with a shape of {$this->get_shape()}.";
	}
  }

  class GreenApple extends Apple{

	public function __construct(){
		// parent refers to the Apple class
		// __construct refers to the Apple construct function
		parent::__construct("Square","Green");
	}
  }
  
	$apple = new Apple("Round");
    $apple->set_code("001");

	$blueApple = new Apple("Triangle","Blue");
	$applePen = new Apple("Rectangle");

	echo $applePen->get_details();
	echo "<br/>";

   echo $blueApple->get_details();
   echo "<br/>";
   echo $apple->get_name_and_color();
   echo "<br/>";
   echo $apple->get_details();

   $greenApple = new GreenApple();

   echo "<br/>";
   echo $greenApple->get_details();
   $greenApple->qty = 20;
   echo $greenApple->qty;
  
?>