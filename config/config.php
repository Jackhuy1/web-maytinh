<?php
$configDB = array();
$configDB["host"] 		= "localhost";
$configDB["database"]	= "maytinh";
$configDB["username"] 	= "maytinh";
$configDB["password"] 	= "Tdc@12345";
define("HOST", "localhost");
define("DB_NAME", "maytinh");
define("DB_USER", "maytinh");
define("DB_PASS", "Tdc@12345");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
