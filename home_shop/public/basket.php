<?php 
include '../public/templates/header.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

$good = getProductBasket();


include '../public/templates/footer.php';
 ?>