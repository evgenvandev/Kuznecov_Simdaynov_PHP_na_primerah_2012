<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.31. Использование функции array_search() - стр. 152
	 */
	 
	// Создаём массив
	$arr = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
	$key = array_search('green', $arr); // вернёт $key = 2
	echo $key;
	$key = array_search('red', $arr); // вернёт $key = 1
	echo $key;
?>