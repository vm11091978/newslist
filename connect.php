<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

// Устанавливаем доступы к базе данных:
	$host = 'localhost';
	$user = 'host1857549';
	$password = 'FxXRGB7c9c';
	$db_name = 'host1857549_gallery';

// Соединяемся с базой данных используя наши доступы:
	$link = mysqli_connect($host, $user, $password, $db_name);

// Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
	mysqli_query($link, "SET NAMES 'utf8'");