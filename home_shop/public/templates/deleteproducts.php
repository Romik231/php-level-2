<?php 
include "../models/functions.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	delete_product($link, $id);
	echo "Товар был удален";
}
 ?>
