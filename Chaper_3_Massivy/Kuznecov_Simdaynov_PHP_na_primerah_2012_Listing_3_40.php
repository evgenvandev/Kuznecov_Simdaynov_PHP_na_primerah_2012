<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.40. ������������� ������� array_walk() - ���. 157
	 */
	 
	$name = array("m" => "maksim", "i" => "igor", "s" => "sergey");
	function print_array($item, $key)
	{
		echo "$key=>$item<br>\n";
	}
	
	/* ������ �������� ������� print_array
	� ������� �������� ������� $name */
	array_walk($name, 'print_array');
?>