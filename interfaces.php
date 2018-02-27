<?php



class Goods
{
	protected $vendor;
	protected $name;
	protected $price;
	
	public function __construct($vendor,$name,$price){
		$this->vendor = $vendor;
		$this->name = $name;
		$this->price = $price;
	}
	
	public function getPrice(){
		return $this->price;
	}	
}

class Car extends Goods
{
	protected $color;
	protected $velocity = 0;
	protected $acceleration = 0;
	
	public function __construct($vendor,$name,$price,$color){
		parent::__construct($vendor,$name,$price);
		$this->color = $color;
	}
	
	public function startEngine(){
		
	}
	
	public function stopEngine() {
		
	}	
}

class Tv extends Goods
{
	protected $screenSize;
	protected $channel = 0;
	
	public function __construct($vendor,$name,$price,$screenSize){
		parent::__construct($vendor,$name,$price);
		$this->screenSize = $screenSize;
	}
	
	public function nextChannel(){
		$this->channel++;
	}
	
	public function prevChannel(){
		$this->channel--;
	}
}

class Pen  extends Goods
{
	protected $color;
	protected $width;
	
	public function __construct($vendor,$name,$price,$color,$width){
		parent::__construct($vendor,$name,$price);
		$this->color = $color;
		$this->width = $width;
	}
	
}

class Bird
{
	protected $weight;
	protected $sex;
	
	public function __construct($weight,$sex){
		$this->weight = $weight;
		$this->sex = $sex;
	}
	
	public function takeoff(){

	}
	
	public function landing(){

	}
}

class Duck extends Bird
{
	public function sayQuack(){
		echo 'Quack';
	}
}

?>
