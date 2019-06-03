<?php 
include "../../models/functions.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$good = get_product($link, $id);
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
	<button type="submit" name="submit">Изменить</button>
</form>
 