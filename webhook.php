<?php
include('includes.php');
$id = $_REQUEST['id'];
//$body = $_REQUEST['body'];
$body = file_get_contents('php://input');

$condition->Edit($id, "`status` = $body");
echo "done";
