<script src="jquery.js"></script>
<script>
	function f(id_good){
		var id_price = "#price_"+id_good;
		var price = $(id_price).val();
		$.ajax({
			method:"GET",
			url:"server.php",
			data: {id:id_good,p:price}
		})
		.done(function(answer){
			alert(answer);
		});
	}
</script>
<?
include "config.php";

$sql = "select * from shop";
$res = mysqli_query($connect,$sql);

$form = "<table border='1' width='500'>";

while($data = mysqli_fetch_assoc($res)){
	$form.="<tr><td>".$data['title']."</td>";
	$form.="<td><input id='price_".$data['id']."' type='text' value=".$data['price']."></td>";
	$form.="<td><button onclick='f(".$data['id'].")'>Сохранить</button></td></tr>";
}
$form.="</table>";
echo $form;
