<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.39. ������������� ������� array_merge_recursive() - ���. 156
	 */
	 
	$fst = array("color" => array("favorite" => "red"), 5);
	$snd = array(10, "color" => array("favorite" => "green", "blue"));
	$sum = array_merge_recursive($fst, $snd);
	echo "<pre>";
	print_r($sum);
	echo "</pre>";
?>