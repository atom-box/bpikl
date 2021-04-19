<?php

require_once 'core/config/dbconfig.inc.php';

// in browser, show errors if any
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

$user = USER;
$password = SECRET;
$database = NAMEOFDATABASE;  
$host = 'localhost';
$table = 'sessions';

// echo "<p>________" .  $user, WRONGPASS . "__________</p>";

try {
  $db = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $password);  // this is the only scary line in the entire file
  echo "<h1>Report</h1>";
  echo "<h2>orders</h2>"; 
  foreach($db->query("SELECT * FROM $table") as $row) {
    print $row['date'];
    print $row['user_id'];
    echo "<br>";
  }
  echo " done";
} catch (PDOException $e) {
  print "Whoa, error!: " . $e->getMessage() . "<br/>";
}





/*
connect 
query is counting only 
return is a line of html with that count and "good connect" message 
*/

?>