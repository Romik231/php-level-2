<?php 
include "../../models/functions.php";
//include_once "edit_product.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$good = get_product($link, $id);
	$name = $_POST['name'];
	$description = $_POST['description'];
	$shortdescription = $_POST['shortdescription'];
	$price = $_POST['price'];
	edit_product($link, $id, $name, $description, $shortdescription, $price);
	echo 'Изменения success';
}
?>
<form action="../controllers/addImg.php" method="POST" enctype="multipart/form-data" class="modal form-edit">
	<label for="name">Новое название товара:</label>
	<input type="text" name="name" value="<?=$good['name']?>"><br>
	<label for="image">Выберите новое изображение:</label>
	<input type="file" name="image"><br>
	<label for="shortdescription">Краткое описание:</label>
	<input type="text" name="shortdescription" value="<?=$good['short_description']?>"><br>
	<label for="description">Подробное описание:</label>
	<textarea name="description"><?=$good['description']?></textarea><br>
	<label for="price">Введите новую цену товара:</label>
	<input type="text" name="price" value="<?=$good['price']?>"><br>
	<input type="hidden" name="edit" value="<?=$good['id']?>">
	
</form>
 <button onclick="edit_good(<?=$good['id']?>)">Изменить</button>