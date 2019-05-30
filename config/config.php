<?php
	try{
	$link = new PDO('mysql:dbname=php;host=localhost', 'root', '');
	} catch (PDOException $e) {
		echo 'Ошибка: Нет подключения'. $e->getMessage();
	}
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
