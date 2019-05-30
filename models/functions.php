<?php
include "../config/config.php";
//Функция ресайза изображений

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
	//Функция добавления информации о файле в базу данных

	if(isset($_FILES['image'])){
			$fileName = $_FILES['image']['name'];
			$fileSize = $_FILES['image']['size'];
			$fileType = explode('/', $_FILES['image']['type'])[1];
			$fileTmp = $_FILES['image']['tmp_name'];
			$insertImg = "INSERT INTO pictures (name, size, path) VALUES ('$fileName', '$fileSize', '../public/img/small/')"; //Делаем запрос на добавление данных в базу
			if(!$fileType){
				echo "Данный формат файла не поддерживается";
			}else{
				changeImage(200, 300, $fileTmp, '../public/img/small/'.$fileName, $fileType);
				move_uploaded_file($fileTmp, '../public/img/big/'.$fileName);
				if($link->exec($insertImg)){
					echo "Фал загружен";
				}else{
					echo "Упс, что-то пошло не так";
				}
			}
		}
	
	

	/*function counters($link, $id, $counter){
	 if ($link && $id && $counter) {
        $query = "SELECT * FROM pictures WHERE id = $id";
        $resDB = mysqli_query($link, $query);
        $data = mysqli_fetch_all($resDB, MYSQLI_ASSOC)[0];
        print_r($data);
        $query = "UPDATE pictures SET click = click +1  WHERE id =  $id";
        mysqli_query($link, $query);
    }
}
	$id = $_GET['id'];
    $click = $_GET['click'];

    if ($id) {
        if ($click == true) {
            counters($link, $id, "click");
        }
}*/
       