<?php
abstract class Good {
	private $name;//Название товара
	private $price;//Стоимость товара
	private $count;//Количество товара
	abstract public function total();// Подсчет окончательной стоимости

	public function __construct($name, $price, $count){
		$this->name = $name;
		$this->price = $price;
		$this->count = $count;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getName(){
		return $this->name;
	}
	public function getCount(){
		return $this->count;
	}

}