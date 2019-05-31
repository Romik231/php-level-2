<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/home_shop/config/config.php";
$login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";
$password = (!empty($_POST['password']))?strip_tags($_POST['password']):"";
$password = md5($password);

$queryuser = "SELECT * FROM users WHERE login='$login' AND password='$password'";
$res = mysqli_query($link, $queryuser);
if(mysqli_num_rows($res)>0){
	$_SESSION["login"] = $login;
	$_SESSION["password"] = $password;
	header("Location:index.php");
}else{
	echo "Error";
}

 ?>