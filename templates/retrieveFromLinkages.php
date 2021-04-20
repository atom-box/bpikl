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
  $db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);  
  foreach($db->query("SELECT * FROM $table") as $row) {
    echo '<div class="card border-primary mb-4" style="max-width: 55rem;">
    <div class="card-body">
        <h4 class="card-title">
            <code>
                timestamp here
            </code>
            <p class="card-text">
                short url and link here
            </p>
            <p class="card-text">
               auto named from parsed URL here
            </p>
        </h4>
';
    echo $row['date'];
    echo $row['user_id'];
    echo '<br>';
    echo '</div> </div>';

  }
} catch (PDOException $e) {
  print "Whoa, error!: " . $e->getMessage() . "<br/>";
}





/*
connect 
query is counting only 
return is a line of html with that count and "good connect" message 
*/

?>