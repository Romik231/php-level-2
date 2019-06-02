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


	<input id="show_more" count_show="5" count_add="3" type="button" value="Показать еще" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
<script>
	$(document).ready(function() {
    	$('#show_more').click(function(){
    		let btn_more = $(this);
			let count_show = parseInt($(this).attr('count_show'));
			let count_add = $(this).attr('count_add');
			console.log(count_show);
			$.ajax({
				url : "load.php",
				method: "POST",
				//dataType: "json",
				data:{
					count_show:count_show,
					count_add:count_add
				},
				success: function(data){
					if(data.result == "success"){
						$('.products').append(data.html);
						btn_more.attr('count_show', (count_show+3));
					}else{
						$('#show_more').hide();
					}
				}

			});
		});
    	});
  </script>



