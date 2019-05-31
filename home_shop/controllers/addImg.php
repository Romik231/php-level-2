<?php 
	include "../config/config.php";
	include "../models/functions.php"; 
	if(isset($_POST) and isset($_FILES)){
		$name = $_POST['name'];//Название товара
		$nameimg = $_FILES['image']['name'];//Название картинки
		$shortdescription = $_POST['shortdescription'];//Краткое описание Товара
		$description =  $_POST['description'];//Полное описание товара
		$price =  $_POST['price']; //Цена товара
		$fileType = explode('/', $_FILES['image']['type'])[1]; //Расширение файла
		$fileTmp = $_FILES['image']['tmp_name'];//Директория временного хранения файла
		changeImage(200, 300, $fileTmp, '../public/img/small/'.$nameimg, $fileType);//Вызываем функцию изменения размера изображения
		move_uploaded_file($fileTmp, '../public/img/big/'.$nameimg);
		
		if(isset($_POST['edit'])){// Если параметр существует,то вызываем функцию внесения изменений
			$id = $_POST['edit'];
			edit_product($link, $id, $name, $nameimg, $description, $shortdescription, $price);
		} else {// Если не существует, то добавляем товар
			add_product($link, $name, $nameimg, $shortdescription, $description, $price);
		}
	}

function changeImage($h, $w, $src, $newsrc, $fileType) {
			
	    $newimg = imagecreatetruecolor($h, $w);
		    if ($fileType == 'jpeg' or $fileType == 'JPEG'){ 
		     	$img = imagecreatefromjpeg($src);
		        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
		        imagejpeg($newimg, $newsrc);
		    } elseif ($fileType == 'jpg' or $fileType == 'JPG') {
		    	$img = imagecreatefromjpg($src);
		        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
		        imagejpg($newimg, $newsrc);
		    } elseif($fileType == 'png' or $fileType == 'PNG') {
		    	$img = imagecreatefrompng($src);
		        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
		        imagepng($newimg, $newsrc);
		    } 
	}

?>


