<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.30. ����� ������ ������� - ���. 151
	 */
	 
	// ������ ������
	$arr = array("first_numb" => 1, "second_numb" => 2);
	if(array_key_exists("first_numb", $arr))
	{
		echo "OK";
	} else
	{
		echo "������ �� �������";
	}
?>