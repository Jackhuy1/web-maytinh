<?php
$configDB = array();
$configDB["host"] 		= "tamldmysql.mysql.database.azure.com";
$configDB["database"]	= "maytinh";
$configDB["username"] 	= "tamld";
$configDB["password"] 	= "Tdc@12345";
define("HOST", "tamldmysql.mysql.database.azure.com");
define("DB_NAME", "maytinh");
define("DB_USER", "tamld");
define("DB_PASS", "Tdc@12345");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
