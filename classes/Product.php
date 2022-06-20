<?php

class Product{

  protected $id;
	protected $name;
  protected $price;
	protected $animalType;
  
  public function __construct($_id, $_name, $_price,$_animalType){
		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->id = $_id;
		$this->name = $_name;
    $this->price = $_price;
		$this->animalType = $_animalType;
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

	public function setAnimalType($_animalType){
		$this->animalType = $_animalType;
	}

	public function getAnimalType(){
		return $this->animalType;
	}

}

?>