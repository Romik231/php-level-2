<?php
include "Class.abstract.php";
include "Class.pieceGood.php";
include "Class.digitalGood.php";
include "Class.weightingGood.php";


$a = new WeightingGood('Крупы', 500, 3);
echo 'Стоимость вашей покупки за '.$a->getCount().' кг '.$a->getName().' составляет '.$a->total().' рублей'.'<br>';

$b = new DigitalGood('Электронная Книга', 1002, 1);
echo 'Стоимость вашей покупки за '.$b->getCount().'  '.$b->getName().' составляет '.$b->total().' рубль'.'<br>';

$c = new PieceGood('АК47', 8000, 2);
echo 'Стоимость вашей покупки за '.$c->getCount().' '.$c->getName().' составляет '.$c->total().' рублей'.'<br>';





