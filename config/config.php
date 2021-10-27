<?php
//@session_start();
function has_ssl( $domain ) { return @fsockopen( 'ssl://' . $domain, 443, $errno, $errstr, 30 ); }

#live settings;
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "tradingview");
define("WEB_PATH","http://localhost:8080/TradingView");
define("PHYSICAL_PATH", $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "TradingView");
define("CHAR_SET", "utf-8");

# timezone;
date_default_timezone_set("Asia/Dubai");
define('MYSQL_TIMEZONE', '+04:00');

?>