<?php

	include "header.php";
	require_once "conf/config.php";
	
	/************************************Функция загрузки изображений из папки***************************************************/
	/*function renderImg(){
	$imgSmall = scandir('img/small/');
		foreach($imgSmall as $nameImg){
			if($nameImg == "." ||$nameImg == ".."){
				continue;
			}else{
				echo "<a href='img/big/$nameImg' class='modal'><img src='img/big/$nameImg'/></a>";
			}
		}
	} */
	
	/******************************************************************************************************************************/

/**************************Функция ресайза изображений*************************************************************/

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

   /*******************************************************************************************************************/

	/**************************Функция добавления информации о файле в базу данных***********************************************/
	function addInfoIntoDB(){
		include "conf/config.php";
		if(isset($_FILES['image'])){
			$fileName = $_FILES['image']['name'];
			$fileSize = $_FILES['image']['size'];
			$fileType = explode('/', $_FILES['image']['type'])[1];
			$fileTmp = $_FILES['image']['tmp_name'];
			$insertImg = "INSERT INTO pictures (name, size, path) VALUES ('$fileName', '$fileSize', 'img/small/')"; //Делаем запрос на добавление данных в базу
			if(!$fileType){
				echo "Данный формат файла не поддерживается";
			}else{
				changeImage(200, 300, $fileTmp, 'img/small/'.$fileName, $fileType);
				move_uploaded_file($fileTmp, 'img/big/'.$fileName);
				if(mysqli_query($link, $insertImg)){
					echo "Фал загружен";
				}else{
					echo "Упс, что-то пошло не так";
				}
			}
		}
	}
	/******************************************************************************************************************************/
	function renderImgFromDB(){
		addInfoIntoDB();
		include "conf/config.php";
		$sqlQuery = "Select * from pictures";
		$result = mysqli_query($link, $sqlQuery);
		while ($data = mysqli_fetch_assoc($result)) {
			echo "<a href = 'img/big/".$data['name']."' class='modal' id='".$data['id']."' onclick='f(".$data['id'].")' target='_blank'><?php counter(); ?><img src = ".$data['path'].$data['name']."></a>";
			
		}
	}

	function counters($link, $id, $counter)
{	include "conf/config.php";
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
            counters($conDB, $id, "click");
        }
}

	include "footer.php";
?>
       