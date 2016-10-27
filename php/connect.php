<?php
require  'medoo.php';

$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'git',
	'server' => 'localhost',
	'username' => 'admin',
	'password' => 'admin',
	'charset' => 'utf8',
]);
?>
