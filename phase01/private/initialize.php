<?php

// Define PRIVATE_PATH as the current directory.
define("PRIVATE_PATH", __DIR__);

// Define PROJECT_PATH by going one directory up from PRIVATE_PATH, pointing to the root of the project.
define("PROJECT_PATH", dirname(PRIVATE_PATH));

// Define PUBLIC_PATH by appending '/public' to your PROJECT_PATH, targeting the 'public' directory within the project.
define("PUBLIC_PATH", PROJECT_PATH . '/public');

// Define SHARED_PATH by appending '/shared' to PRIVATE_PATH, targeting the 'shared' resources directory within 'private'.
define("SHARED_PATH", dirname(__FILE__) . '/shared');

//define("SHARED_PATH", PRIVATE_PATH . '/shared');

// Calculate the public directory's endpoint (inclusive of '/public') in the current script's path for URL purposes.
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;

// Extract the portion of the script's path up to (and including) '/public', effectively determining the project's root URL.
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);

// Define WWW_ROOT as the calculated document root, 
// providing a base URL path for creating links to public resources of the project.
//define("WWW_ROOT", $doc_root);
define("WWW_ROOT", '/sas/phase01/public');

// Include the 'functions.php' file to make its utilities available globally within the project.
// This file should contain definitions of functions used across your project.
require_once('functions.php');

?>
