<?
include "config.php";

$id = $_GET['id'];
$price = $_GET['p'];
$sql = "update shop set price=$price where id=$id";
if(mysqli_query($connect,$sql)){
	echo "Data success saved!";
}
