<?php 
include "../models/functions.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$good = get_product($link, $id);
}

include "FormEdit.php";
if($_POST['edit']){
	$name = $_POST['name'];
	$description = $_POST['description'];
	$shortdescription = $_POST['shortdescription'];
	$price = $_POST['price'];
	edit_product($link, $id, $name, $description, $shortdescription, $price);		
}
?>
