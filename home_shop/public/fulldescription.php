<?php 
include "templates/header.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

$product = get_product($link, $id);
?>

<div class="full_product">
	<div class="fullimg">
		<img src="<?='img/big/'.$product['image']?>" alt="">
	</div>
  	<div class="full_descr">
	  	<h4>Название: <?=$product['name'];?></h4>
	  	<p><b>Описание:</b> <?=$product['description']?></p>
	  	<span><b>Цена:</b><?=$product['price']?></span>
	  	<?php 
	  	if(isset($_SESSION['login']) and isset($_SESSION['password'])){?>
	  	<a href="templates/deleteproducts.php?id=<?=$id?>">ccskrf</a>

	  	<button id='delete' onclick="delete_good(<?=$product['id']?>)">Удалить товар</button>
	  	<a href="templates/FormEdit.php?<?="id=$id"?>" class="modal"><button>Редактировать</button></a>
	  	<?}?>
	  	<button onclick="buy(<?=$data['id']?>)">Купить</button> 
	  	<br><a href="index.php">На главную</a><br><a href="index.php?page=product">В каталог</a> 
  	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/home_shop/public/templates/footer.php"; ?>

