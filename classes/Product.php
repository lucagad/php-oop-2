<?php

class Product{

  protected $id;
	protected $name;
  protected $price;
  
  public function __construct($_id, $_name, $_price){
		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->id = $_id;
		$this->name = $_name;
    $this->price = $_price;
  }

  public function getId(){
		return $this->id;
	}

  public function setName($_name){
		$this->name = $_name;
	}

	public function getName(){
		return $this->name;
	}

  public function setPrice($_price){
		$this->price = $_price;
	}

	public function getPrice(){
		return $this->price;
	}

}

?>