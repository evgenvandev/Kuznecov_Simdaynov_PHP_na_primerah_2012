<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.23. Использование функции array_count_values() - стр. 146
	 */
	 
	// Создаём массив
	$array = array(1, "hello", 1, "world", "hello");
	$new = array_count_values($array);
	// Выводим дамп массива
	echo "<pre>";
	print_r($new);
	echo "</pre>";
?>