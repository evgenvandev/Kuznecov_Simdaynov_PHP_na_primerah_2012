<?php
	/*
		�������� �., �������� �. PHP �� ��������. 2 ��� - 2012
		������� 3.44. ������������� ����������� list() - ���. 160
	 */
	 
	// �������, ������������ ������ � �����, ������� � ���
	function get_date($time)
	{
		return array(date("Y", $time), date("m", $time), date("d", $time));
	}
	// �������� ������� ����
	list($year, $month, $day) = get_date(time());
	
	echo "��� - $year<br />";     // ��� -  2019
	echo "����� - $month<br />";  // ����� - 05
	echo "���� - $day<br />";     // ���� - 17
?>