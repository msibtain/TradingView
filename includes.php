<?php
@session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
ini_set("display_errors",1 );
require_once("config/config.php");
require_once("db/db.php");
global $db;
$db = new db();
$db->set_character();

if ($handle = opendir('classes')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..")
        {
            include("classes/" . $entry);
        }
    }
    closedir($handle);
}

//require_once("functions.php");