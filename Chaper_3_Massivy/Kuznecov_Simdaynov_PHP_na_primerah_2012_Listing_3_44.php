<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.44. Использование конструкции list() - стр. 160
	 */
	 
	// Функция, возвращающая массив с годом, месяцем и днём
	function get_date($time)
	{
		return array(date("Y", $time), date("m", $time), date("d", $time));
	}
	// Получаем текущую дату
	list($year, $month, $day) = get_date(time());
	
	echo "Год - $year<br />";     // Год -  2019
	echo "Месяц - $month<br />";  // Месяц - 05
	echo "День - $day<br />";     // День - 17
?>