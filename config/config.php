<?php
$configDB = array();
$configDB["host"] 		= "maytinhsql.mysql.database.azure.com";
$configDB["database"]	= "maytinh";
$configDB["username"] 	= "sqluser";
$configDB["password"] 	= "P@sswrd45";
define("HOST", "maytinhsql.mysql.database.azure.com");
define("DB_NAME", "maytinh");
define("DB_USER", "sqluser");
define("DB_PASS", "P@ssword45");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
