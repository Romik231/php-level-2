<?php 
include "../config/config.php";

$countView = $_POST['count_add'];
$startIndex = $_POST['count_show'];
print_r($countView);
print_r($startIndex);

// $sql =  "SELECT * FROM products LIMIT $startIndex, $countView";
// $result = mysqli_query($link, $sql);

// while($data = mysqli_fetch_assoc($result)) {
// 	$productsData[] = $data;
	
// 	}
// 	if(empty($productsData)){
// 		// если новостей нет
// 		echo json_encode(array(
// 			'result' 	=> 'finish'
// 		));
// 	}else{
// 		// если новости получили из базы, то свормируем html элементы
// 		// и отдадим их клиенту
// 		$html = "";
// 		foreach($productsData as $oneNews){
// 			$html .= "
// 				<div>
// 					<b>{$oneNews['name']}</b>
// 					<p>{$oneNews['description']}</p>
// 				</div>
// 			";
// 		}
// 		echo json_encode(array(
// 			'result' 	=> 'success',
// 			'html'		=> $html
// 		));
// 	}
//  ?>
