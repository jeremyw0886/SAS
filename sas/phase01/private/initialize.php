<?php
define("PRIVATE_PATH", __DIR__);

define("PROJECT_PATH", dirname(PRIVATE_PATH));

define("PUBLIC_PATH", PROJECT_PATH . '/public');

define("SHARED_PATH", dirname(__FILE__) . '/shared');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;

$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);

define("WWW_ROOT", '/sas/phase01/public');

require_once('functions.php');
?>
