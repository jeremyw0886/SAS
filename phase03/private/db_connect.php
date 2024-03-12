<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
define('DB_SERVER', 'localhost');
define('DB_USER', 'sally');
define('DB_PASS', 'somePa55word');
define('DB_NAME', 'salamanders');

// 1. Create a database connection
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Test if connection occurred.
if(mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
}

// 2. Perform database query
$query = "SELECT * FROM salamander";
$result_set = mysqli_query($connection, $query);

// Test if query occurred.
if(!$result_set) {
    exit("Database query failed.");
}

// 3. Use returned data (if any)
// while($subject = mysqli_fetch_assoc($result_set)) {
//     echo $subject["name"] . "<br />";
// }

// 4. Release returned data
mysqli_free_result($result_set);

// 5. Close database connection
mysqli_close($connection);

?>
