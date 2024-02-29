<?php require_once('../../private/initialize.php'); ?>

<?php
// Initialize cURL session
$curl = curl_init();

// Set the URL and other necessary options
curl_setopt($curl, CURLOPT_URL, "http://localhost:8888/web182/sas/public/salamanders/new.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and store the response
$response = curl_exec($curl);

// Close the cURL session
curl_close($curl);

// Display the response
echo $response;
?>
