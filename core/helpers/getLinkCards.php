<?php

require_once 'core/config/dbconfig.inc.php';
require_once 'core/config/linksFlatFileConfig.php';

$user = USER;
$password = SECRET;
$database = NAMEOFDATABASE;  
$host = 'localhost';
$table = 'sessions';  // todo NOT USED? 

try {
  $db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);  
  $pdoObject = $db->query("
    select date, longurl, short 
      from links as l 
      join sessions as s 
      on l.session_id = s.session_id
  ");
  $ascending = $pdoObject->fetchAll();

  // var_dump($ascending); die;
  $descending = array_reverse($ascending);
  foreach($descending as $row) {
    echo '<div class="card border-primary mb-4" style="max-width: 55rem;">
    <div class="card-body">
        <p class="card-text text-left">
            Full URL: ' . $row["longurl"] . ' 
        </p>
        <p class="card-text text-left">
            Short URL: ' . CUSTOMER_FACING_STUB . $row["short"] .  '
        </p>
        <p class="card-title text-right">
          <code >
            timestamp ' . $row["date"] . '
          </code>
        </p>
  ';
    echo '</div> </div>';
  }
} catch (PDOException $e) {
  print "Whoa, error!: " . $e->getMessage() . "<br/>";
}

?>
