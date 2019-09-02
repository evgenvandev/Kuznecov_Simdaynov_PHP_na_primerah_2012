<?php
	// Адрес сервера MySQL
	$dblocation = "localhost";
	// Имя базы данных на хостинге или локальной машине
	$dbname = "cdcol";
	// Имя пользователя базы данных
	$dbuser = "root";
	// и его пароль
	$dbpasswd = "sql12345";
	
	// Объявляем объект класса mysqli, который устанавливает
	// соединение с сервером
	$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);
	if (mysqli_connect_errno()) {
		exit("Ошибка установки соединения");
	}
	
	// Выводим версию сервера
	echo "Выводим версию сервера используя <i>объектно-ориентированную</i> библиотеку php_mysqli<BR>";
	echo $mysqli->server_info;
	
	// Закрываем соединение с сервером
	$mysqli->close();
?>