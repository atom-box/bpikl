<?php
include_once '/home/evan/projects/do-not-commit/shortener.txt';
$file = '/home/evan/projects/do-not-commit/shortener.txt';
// The new person to add to the file
$person = date('Y-m-d H:i:s', time()) . "Bobby Bonilla\n";
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
$successFlag = file_put_contents($file, $person, FILE_APPEND | FILE_USE_INCLUDE_PATH | LOCK_EX);
echo "success flag says " . $successFlag . PHP_EOL;