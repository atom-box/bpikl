<?php

require_once 'core/config/dbconfig.inc.php';

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
        <h4 class="card-title">
            <code>
                timestamp ' . $row["date"] . '
            </code>
            <p class="card-text">
                TOO LONG [' . $row["longurl"] . '] 
            </p>
            <p class="card-text">
               BETTER! [' .$row["short"] .  ']
            </p>
        </h4>
  ';
    echo '</div> </div>';
  }
} catch (PDOException $e) {
  print "Whoa, error!: " . $e->getMessage() . "<br/>";
}

?>
