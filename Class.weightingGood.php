<?php 
class WeightingGood extends Good{
	
	public function total(){
		return $this->getCount()*$this->getPrice();
		
	}
}


