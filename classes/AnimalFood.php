<?php
// includo la classe da estendere
require_once __DIR__ . "/Product.php";

// estendo la classe User
class AnimalFood extends Product{

  
	private $ingredients;

  public function __construct($_id, 
															$_name, 
															$_price,
															$_animalType,
															$_ingredients){

		// eredito il costruttore della classe madre e gli passo i parametri obbligatori
		parent::__construct($_id,$_name, $_price,$_animalType);
		$this->setIngredients($_ingredients);
  }

	public function setIngredients($_ingredients){
		$this->ingredients = $_ingredients;
	}

	public function getIngredients(){
		return $this->ingredients;
	}

}

?>