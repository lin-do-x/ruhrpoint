<?php


// Set the timezone if necessary
date_default_timezone_set('UTC');


// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');


// Choose a hashing algorithm
$hashAlgorithm = 'sha256';

// Generate the hash of the current date and time
$hashedDateTime = hash($hashAlgorithm, $currentDateTime);
echo $hashedDateTime . '   '.$currentDateTime;
?>