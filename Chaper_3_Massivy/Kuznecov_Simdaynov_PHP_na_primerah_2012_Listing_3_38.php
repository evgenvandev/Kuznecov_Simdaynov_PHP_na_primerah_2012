<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.38. Использование функции array_merge() - стр. 156
	 */
	 
	$fst = array("one", "two");
	$snd = array("three", "four", "five", "six");
	$sum = array_merge($fst, $snd);
	echo "<pre>";
	print_r($sum);
	echo "</pre>";
?>