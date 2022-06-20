<?php

class User{

  protected $id;
	protected $name;
  protected $surname;
  
  public function __construct($_id, $_name, $_surname){
		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->id = $_id;
		$this->name = $_name;
    $this->surname = $_surname;
  }

  public function getId(){
		return $this->id;
	}

  public function setName($_name){
		$this->name = $_name;
	}

  public function setSurname($_surname){
		$this->surname = $_surname;
	}

	public function getName(){
		return $this->name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function getFullName(){
		return $this->name . ' ' . $this->surname;
	}

}

?>