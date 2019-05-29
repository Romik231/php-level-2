<?php 
include "lib/Twig/Autoloader.php";
Twig_Autoloader::register();

try{
	$db = new PDO('mysql:dbname=php;host=localhost', 'root', '');
} catch (PDOException $e) {
	echo 'Ошибка: Нет подключения'. $e->getMessage();
}
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try{
	$sql = "SELECT * FROM pictures";
	$stn = $db->query($sql);
	while ($row = $stn->fetchObject()){
		$data[] = $row;
	}
	unset($db);

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	$template = $twig->loadTemplate('pictures.tmpl');
	echo $template->render(array(
		'data'=> $data
	));
} catch (Exception $e){
	die ('ERROR' . $e->getMessage());
}
$stmt = $db->prepare("Select * from pictures");
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
print($array);
//print_r($stmt->execute());