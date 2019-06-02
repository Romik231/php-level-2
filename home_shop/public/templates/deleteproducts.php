<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/home_shop/models/functions.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	delete_product($link, $id);
	echo "Товар был удален";
}
 ?>
