<?php
require  'medoo.php';

$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'newform_popular',
	'server' => 'localhost',
	'username' => 'newform_user',
	'password' => 'newform_pass',
	'charset' => 'utf8',
]);
?>
