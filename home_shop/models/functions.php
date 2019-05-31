<?php  
include $_SERVER['DOCUMENT_ROOT']."/home_shop/config/config.php";
/*функция получения всех товаров*/
function get_products($link){
	$sqlSelect = "SELECT * FROM products";
	$result = mysqli_query($link, $sqlSelect);
	while($data = mysqli_fetch_assoc($result)){
		$row[] = $data;
	}
		return $row;	
}	

/*Функция получения конкретного товара товара*/
function get_product($link, $id){
	$id = (int)$id;
	$sqlSelect = "SELECT * FROM products where id=".$id;
	$result = mysqli_query($link, $sqlSelect);
	$good = mysqli_fetch_assoc($result);
		 		
	return $good;
}	
/*Функция добавления товара*/
function add_product($link, $name, $nameimg, $shortdescription, $description, $price){
	$sqlInsert = "INSERT INTO products (name, image, short_description, description, price) VALUES ('$name', '$nameimg', '$shortdescription', '$description', '$price')";
	if(mysqli_query($link, $sqlInsert)){
		echo "Данные успешно добавлены";
	}else{
		die(mysqli_error($link));
	}
}
/*Функция удаление товара*/
function delete_product($link, $id){
	$sqlDelete = "DELETE FROM products WHERE id=".$id;
	mysqli_query($link, $sqlDelete);
	return mysqli_affected_rows($link);
}

/*Функция редактирования товара*/
function edit_product($link, $id, $name, $nameimg, $description, $shortdescription, $price){
	 $id = (int)$id;
	$queryUpdate = "UPDATE products SET name='$name', image='$nameimg',  short_description='$shortdescription', description='$description', price='$price' WHERE id=".$id;
	if(mysqli_query($link, $queryUpdate)){
		echo "Изменения внесены";
	}else
		echo "Ошибка";

}

/*Функция добавления товара в корзину*/
function addTobasket($id_product, $name, $price, $count, $login=null){
	$query = "INSERT INTO basket (id_product, name, price, count, login) VALUES ('%s', '%s', '%s', '%s', '%s')";
	$queryInsert = sprintf($query,
		mysqli_real_escape_string($link, $id_product),
		mysqli_real_escape_string($link, $name),
		mysqli_real_escape_string($link, $price),
		mysqli_real_escape_string($link, $count),
		mysqli_real_escape_string($link, $login));
	if(!mysqli_query($link, $queryInsert)){
		die(mysql_error($link));
	}else{
		return true;
	}

}

/*Функция получения товара в корзине*/
function getProductBasket(){
	$query = "SELECT FROM basket WHERE id_product = $id"; 
}
?>
