<?php
class DigitalGood extends PieceGood{
	public function total(){
		return $this->getCount()*parent::getPrice()/2;
	}
}



