<?php
	// ����� ������� MySQL
	$dblocation = "localhost";
	// ��� ���� ������ �� �������� ��� ��������� ������
	$dbname = "cdcol";
	// ��� ������������ ���� ������
	$dbuser = "root";
	// � ��� ������
	$dbpasswd = "sql12345";
	
	// ��������� ������ ������ mysqli, ������� �������������
	// ���������� � ��������
	$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);
	if (mysqli_connect_errno()) {
		exit("������ ��������� ����������");
	}
	
	// ������� ������ �������
	echo "������� ������ ������� ��������� <i>��������-���������������</i> ���������� php_mysqli<BR>";
	echo $mysqli->server_info;
	
	// ��������� ���������� � ��������
	$mysqli->close();
?>