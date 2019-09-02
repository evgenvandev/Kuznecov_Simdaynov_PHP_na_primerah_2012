<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.39. Использование функции array_merge_recursive() - стр. 156
	 */
	 
	$fst = array("color" => array("favorite" => "red"), 5);
	$snd = array(10, "color" => array("favorite" => "green", "blue"));
	$sum = array_merge_recursive($fst, $snd);
	echo "<pre>";
	print_r($sum);
	echo "</pre>";
?>