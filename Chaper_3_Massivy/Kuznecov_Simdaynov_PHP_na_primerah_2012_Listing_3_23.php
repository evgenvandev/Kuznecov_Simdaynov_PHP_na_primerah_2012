<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.23. ������������� ������� array_count_values() - ���. 146
	 */
	 
	// ������ ������
	$array = array(1, "hello", 1, "world", "hello");
	$new = array_count_values($array);
	// ������� ���� �������
	echo "<pre>";
	print_r($new);
	echo "</pre>";
?>