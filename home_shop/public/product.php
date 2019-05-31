	<a href="templates/FormAdd.php" class="modal"><button>Добавление товара</button></a>
	<div class="products">
		<?php 
		$products = get_products($link);
		foreach($products as $data){?>
			<div class="product">
				<div class="preview">
					<img src="<?='img/small/'.$data['image']?>" alt="">
				</div>
			  	<div class="descr">
				  	<h4>Название: <?=$data['name']?></h4>
				  	<p><b>Краткое описание:</b> <?=$data['short_description']?></p>
				  	<span><b>Цена:</b> <?=$data['price']?></span>
                    <a href="fulldescription.php?id=<?=$data['id']?>"><button>Подробное описание</button></a> 
                    <button onclick="buy(<?=$data['id']?>)">Купить</button> 
			  	</div>
			  </div>
		<?}?>
	</div>

<p id="par1">После нажатия на кнопку ниже в данном поле будет отображен результат низкоуровневого AJAX запроса.</p>
<input id="but1" type="button" value="Отправить низкоуровневый запрос." />


