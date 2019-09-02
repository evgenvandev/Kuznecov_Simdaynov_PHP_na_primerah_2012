<?php
	/*
		Кузнецов М., Симдянов И. PHP на примерах. 2 изд - 2012
		Листинг 3.30. Поиск ключей массива - стр. 151
	 */
	 
	// Создаём массив
	$arr = array("first_numb" => 1, "second_numb" => 2);
	if(array_key_exists("first_numb", $arr))
	{
		echo "OK";
	} else
	{
		echo "Ничего не найдено";
	}
?>