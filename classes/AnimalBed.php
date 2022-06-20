<?php
// includo la classe da estendere
require_once __DIR__ . "/Product.php";

// estendo la classe User
class AnimalBed extends Product{

  
	private $typeOfBed;

  public function __construct($_id, 
															$_name, 
															$_price,
															$_animalType,
															$_typeOfBed){

		// eredito il costruttore della classe madre e gli passo i parametri obbligatori
		parent::__construct($_id,$_name, $_price,$_animalType);

		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->setTypeOfBed($_typeOfBed);
  }

	public function setTypeOfBed($_typeOfBed){
		$this->typeOfBed = $_typeOfBed;
	}

	public function getTypeOfBed(){
		return $this->typeOfBed;
	}

}

?>