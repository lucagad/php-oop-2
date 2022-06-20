<?php
// includo la classe da estendere
require_once __DIR__ . "/Product.php";

// estendo la classe User
class AnimalFood extends Product{

  private $expiration_date;
	private $ingredients;

  public function __construct($_id, 
															$_name, 
															$_price,
															$_animalType,
															$_ingredients){

		// eredito il costruttore della classe madre e gli passo i parametri obbligatori
		parent::__construct($_id,$_name, $_price);
		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->animalType = $_animalType;
		$this->ingredients = $_ingredients;
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

	public function setIngredients($_ingredients){
		$this->ingredients = $_ingredients;
	}

	public function getIngredients(){
		return $this->ingredients;
	}

}

?>