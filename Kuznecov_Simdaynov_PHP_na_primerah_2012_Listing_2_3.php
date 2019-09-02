<?php
	$text = shell_exec("dir");
	echo "<pre>";
	echo htmlspecialchars(convert_cyr_string($text, 'd', 'w'));
	echo "</pre>";
?>