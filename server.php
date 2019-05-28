<?php
	include "conf/config.php";

	$id = $_GET['id'];
	$click = $_GET['click'];
	$sql = "update pictures set click=$click+1 where id=$id";
?>