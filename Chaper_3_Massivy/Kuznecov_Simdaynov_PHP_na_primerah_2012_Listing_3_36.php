<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.36. Слияние массивов при помощи оператора + - стр. 154
	 */
	 
	$fst = array(1 => "one", 2 => "two");
	$snd = array(3 => "three", 4 => "four");
	$sum = $fst + $snd;
	echo "<pre>";
	print_r($sum);
	echo "</pre>";
?>