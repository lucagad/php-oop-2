<?php

class Cart{

  protected $id;
	protected $user;
	protected $list_items;
  protected $total_price;
	protected $discount;
	protected $final_price;


  public function __construct($_id, $_user, $_list_items){
		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->id = $_id;
		$this->user = $_user;
    $this->list_items = $_list_items;
  }



  public function getId(){
		return $this->id;
	}



  public function setUser($_user){
		$this->user = $_user;
	}



	public function getUser(){
		return $this->user;
	}



  public function setListItems($_list_items){
		$this->list_items = $_list_items;
	}


	public function getListItems(){

		$list = " ";

		foreach ($this->list_items as $item => $product) {
			$list = $product->getName() . " - " . $list;
		}

		return $list ;
	}

	
	public function setTotalPrice(){

		$total = 0;

		foreach ($this->list_items as $item => $product) {
			$total += $product->getPrice();
		}
		echo $total;

		$this->total_price = $total;
	}

	public function getTotalPrice(){
		return $this->total_price;
	}

}

?>