<?php 
include "lib/Twig/Autoloader.php";
include "../config/config.php";

Twig_Autoloader::register();

try{
	$sql = "SELECT * FROM pictures";
	$stn = $link->query($sql);
	while ($row = $stn->fetchObject()){
		$data[] = $row;
	}
	unset($link);

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	$template = $twig->loadTemplate('pictures.tmpl');
	echo $template->render(array(
		'data'=> $data
	));
} catch (Exception $e){
	die ('ERROR' . $e->getMessage());
}

include "../models/functions.php";