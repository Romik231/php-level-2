$(document).ready(function() {
    $(".modal").fancybox();
	
});
function delete_good(id_good){
	$.ajax({
		url: "templates/deleteproducts.php",
		method: 'GET',
		data: {id:id_good},
		success: function(data){
			$('.full_product').html('Товар был удален');
			setTimeout(function(){
			  window.location.href = 'index.php?page=product';
						}, 1000);
			
		}
	});
}

function edit_good(id_good){
	$.ajax({
		url:"templates/FormEdit.php",
		method:"GET",
		data:{id:id_good},
		success: function(data){
			console.log(data);
			setTimeout(function(){
			    window.location.href = 'index.php?page=product';
			 			}, 1000);
		}
	});
}

   
