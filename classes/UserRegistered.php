<?php

// includo la classe da estendere
require_once __DIR__ . "/User.php";

// estendo la classe User
class UserRegistered extends User{

  private $discount;
	private $email;

	public function __construct($_id,
															$_name, 
															$_surname,
															$_email
														){

// eredito il costruttore della classe madre e gli passo i parametri obbligatori
parent::__construct($_id,$_name, $_surname);

$this->setDiscount();
$this->setEmail($_email);

}

	 // questo è polimofismo del metodo setSconto perché ha lo stesso nome del metodo genitore ma con funzionalità diverse
	public function setDiscount(){
    $this->discount = 20;
  }

  public function getDiscount(){
    return $this->discount;
  }

	public function setEmail($_email){
		$this->email = $_email;
	}

	public function getEmail(){
		return $this->email;
	}

}

?>