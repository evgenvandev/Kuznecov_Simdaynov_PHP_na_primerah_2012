<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.24. ������������� ������� is_array() - ���. 147
	 */
	 
	// ������ ������
	$arr = array(1, 2, 3);
	
	if(is_array($arr))
	{
		echo "��� ������<br />";
	}
	if(is_array($arr[0]))
	{
		echo "��� ������<br />";
	} else echo "��� �� ������<br />";
?>