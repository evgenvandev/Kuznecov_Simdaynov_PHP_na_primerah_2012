<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.46. ������������� ����������� list(), �������� ���� ����� - ���. 161
	 */
	 
	// �������, ������������ ������ � �����, ������� � ����
	function get_date($time)
	{
		return array(date("Y", $time), date("m", $time), date("d", $time));
	}
	// �������� ���� �����
	list(, $month) = get_date(time());
	
	echo "����� - $month<br />";  // ����� - 05
?>