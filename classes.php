<?php
class $Car
{
	private $vendor;
	private $model;
	private $color;
	private $velocity = 0;
	private $acceleration = 0;
	
	public function __construct($vendor,$model,$color){
		$this->vendor = $vendor;
		$this->model = $model;
		$this->color = $color;
	}
	
	public function startEngine(){
		
	}
	
	public function stopEngine() {
		
	}	
}

class $Tv
{
	private $vendor;
	private $model;
	private $screenSize;
	private $channel = 0;
	
	public function __construct($vendor,$model,$screenSize){
		$this->vendor = $vendor;
		$this->model = $model;
		$this->screenSize = $screenSize;
	}
	
	public function nextChannel(){
		$this->channel++;
	}
	
	public function prevChannel(){
		$this->channel--;
	}
}

class $Pen
{
	private $color;
	private $price;
	
	public function __construct($color,$price){
		$this->color = $color;
		$this->price = $price;
	}
	
	public function getPrice(){
		return $this->price;
	}
}

class $Duck
{
	private $weight;
	private $sex;
	
	public function __construct($weight,$sex){
		$this->weight = $weight;
		$this->sex = $sex;
	}
	
	public function sayQuack(){

	}
	
	public function takeoff(){

	}
	
	public function landing(){

	}
}

class $Goods
{
	private $vendor;
	private $name;
	private $price;
	
	public function __construct($vendor,$name,$price){
		$this->vendor = $vendor;
		$this->name = $name;
		$this->price = $price;
	}
	
	public function getPrice(){
		return $this->price;
	}	
}

?>
