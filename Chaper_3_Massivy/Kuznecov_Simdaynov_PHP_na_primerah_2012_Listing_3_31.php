<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.31. ������������� ������� array_search() - ���. 152
	 */
	 
	// ������ ������
	$arr = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
	$key = array_search('green', $arr); // ����� $key = 2
	echo $key;
	$key = array_search('red', $arr); // ����� $key = 1
	echo $key;
?>