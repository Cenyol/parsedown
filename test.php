<?php
	// 以下是两行简单的试用，更多tutorial请见：https://github.com/erusev/parsedown/wiki/Tutorial:-Get-Started
	require_once "Parsedown.php";
	$parsedown = new Parsedown();
	// echo $parsedown->text('##this is a h2 title'); 
	// echo $parsedown->text('Hit the __Parse__ button or `⌘ + Enter`'); 

	
	$mdFile = fopen("README.md", "r") or die("Unable to open file!");
	$mdString = fread($mdFile,filesize("README.md"));
	echo $parsedown->text($mdString); 
	
	fclose($mdFile);




?>
