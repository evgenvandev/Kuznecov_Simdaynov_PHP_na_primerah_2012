<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.42. Получение массива с уникальными значениями - стр. 159
	 */
	 
	$input = array("a" => "green", "red", "b" => "green", "blue", "red");
	$result = array_unique($input);
	
	// выводим дамп массива
	echo "<pre>";
	print_r($result);
	echo "</pre>";
?>