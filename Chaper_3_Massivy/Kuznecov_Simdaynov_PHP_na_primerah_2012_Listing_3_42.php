<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.42. ��������� ������� � ����������� ���������� - ���. 159
	 */
	 
	$input = array("a" => "green", "red", "b" => "green", "blue", "red");
	$result = array_unique($input);
	
	// ������� ���� �������
	echo "<pre>";
	print_r($result);
	echo "</pre>";
?>