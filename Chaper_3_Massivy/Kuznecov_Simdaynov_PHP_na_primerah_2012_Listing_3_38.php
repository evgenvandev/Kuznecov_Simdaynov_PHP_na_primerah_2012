<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.38. ������������� ������� array_merge() - ���. 156
	 */
	 
	$fst = array("one", "two");
	$snd = array("three", "four", "five", "six");
	$sum = array_merge($fst, $snd);
	echo "<pre>";
	print_r($sum);
	echo "</pre>";
?>