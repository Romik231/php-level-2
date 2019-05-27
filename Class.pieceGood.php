<?php
class PieceGood extends Good{
	public function total(){
		return $this->getCount()*$this->getPrice();
	}
}


