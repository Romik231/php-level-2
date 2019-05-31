<?php
include "config/config.php";
$login = (!empty($_POST['login'])) ? strip_tags($_POST['login']) : "";
$password = (!empty($_POST['password'])) ? strip_tags($_POST['password']) : "";
$email = (!empty($_POST['email'])) ? strip_tags($_POST['email']) : "";
$password = md5($password);

$Insertreg = "INSERT INTO users (login, password, email) VALUES ('$login', '$password', '$email')";
mysqli_query($link, $Insertreg);
?>