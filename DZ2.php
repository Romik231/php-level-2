<?php
abstract class Good {
	private $name;//Название товара
	private $price;//Стоимость товара
	abstract public function total();// Подсчет окончательной стоимости

	public function __construct($name, $price){
		$this->name = $name;
		$this->price = $price;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getName(){
		return $this->name;
	}

}

class weightingGood extends Good{
	private $count;
	public function total(){
		return $this->getCount()*$this->getPrice();
		
	}
	public function setCount($count){
		$this->count = $count;
	}
	public function getCount(){
		return $this->count;
	}
}
$a = new weightingGood('Крупы', 500);
$a->setCount(3);
echo 'Стоимость вашей покупки за '.$a->getCount().' кг '.$a->getName().' составляет '.$a->total().' рублей';
