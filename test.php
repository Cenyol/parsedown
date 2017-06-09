<?php
	// 以下是两行简单的试用，更多tutorial请见：https://github.com/erusev/parsedown/wiki/Tutorial:-Get-Started
	require_once "Parsedown.php";
	$parsedown = new Parsedown();
	echo $parsedown->text('##this is a h2 title'); 
	echo $parsedown->text('Hit the __Parse__ button or `⌘ + Enter`'); 




?>
