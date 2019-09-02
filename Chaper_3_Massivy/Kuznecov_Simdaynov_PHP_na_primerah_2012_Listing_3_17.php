<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.17. Обход массива в цикле foreach - стр. 143
	 */
	 
	 // Создаём массив
	 $number = array("first" => "1",
					"second" => "2",
					"third" => "3");
	 foreach($number as $index => $val)
	 {
		echo "$index = $val <br>";
	 }
?>