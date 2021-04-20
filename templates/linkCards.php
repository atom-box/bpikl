<?php

require_once 'core/config/dbconfig.inc.php';


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
                timestamp ' . $row['date'] . '
            </code>
            <p class="card-text">
                ' . $row['user_id'] . '
            </p>
            <p class="card-text">
               auto named from parsed URL here
            </p>
        </h4>
';
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