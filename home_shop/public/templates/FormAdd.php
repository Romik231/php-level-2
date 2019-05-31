<form action="../controllers/addImg.php" method="POST" enctype="multipart/form-data" class="modal form-add-product">
	<label for="name">Название товара:</label>
	<input type="text" name="name"><br>
	<label for="image">Выберите изображение:</label>
	<input type="file" name="image"><br>
	<label for="shortdescription">Краткое описание:</label>
	<input type="text" name="shortdescription"><br>
	<label for="description">Подробное описание:</label>
	<textarea name="description"></textarea><br>
	<label for="price">Введите цену товара:</label>
	<input type="text" name="price"><br>
	<input type="submit" name="submit "value="Добавить">
</form>