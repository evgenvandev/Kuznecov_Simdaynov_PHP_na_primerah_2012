<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.40. Использование функции array_walk() - стр. 157
	 */
	 
	$name = array("m" => "maksim", "i" => "igor", "s" => "sergey");
	function print_array($item, $key)
	{
		echo "$key=>$item<br>\n";
	}
	
	/* Теперь применим функцию print_array
	к каждому элементу массива $name */
	array_walk($name, 'print_array');
?>