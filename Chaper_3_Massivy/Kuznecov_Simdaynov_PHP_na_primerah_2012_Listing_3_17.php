<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.17. ����� ������� � ����� foreach - ���. 143
	 */
	 
	 // ������ ������
	 $number = array("first" => "1",
					"second" => "2",
					"third" => "3");
	 foreach($number as $index => $val)
	 {
		echo "$index = $val <br>";
	 }
?>