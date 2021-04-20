<?php
// in browser, show errors if any
ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once ('./core/helpers/dbTransaction.php');  // crasher
require_once('./core/config/dbconfig.inc.php');  // crasher

// don't hit this code until after clicking submit form
$user = USER;
$password = SECRET;
$database = NAMEOFDATABASE;  
$host = 'localhost';
$table = 'sessions';

$transaction = new dbTransaction();

$sessionQuery = 'insert into sessions (user_id, date) values (:user_id, :date)';
$sessionValues = 
[
    'user_id'     => 999 ,
    'date'        => date('Y-m-d H:i:s', time()),
];

$A_z = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*({?';
$randomString = '';
for ($i = 0; $i < 6; $i++) { 
    $randomString .= $A_z[random_int(0, 63)]; 
}
$session_id = $transaction->last_insert_id;
$longurl    =  'https://jangkajawa.blogspot.com/2021/04/apa-itu-merbot.html';
$short      =  'https://tinyurl.com/' . $randomString;

$linkQuery = "insert into links (session_id, longurl, short) values (:session_id , :longurl , :short  )";
$linkValues = 
[
    'longurl' =>  $longurl,
    'short' =>  $short,
    'session_id' => $session_id,
];

// save the session, THEN ASK THE SQL WHICH SERIAL ID WAS IT?
$transaction->insertQuery($sessionQuery, $sessionValues);
  

$transaction->insertQuery($linkQuery, $linkValues);
//  now that you know that serial id, write the linkl

$transaction->startTransaction();
$result = $transaction->submitTransaction();


  //   all good?
  if ($result) {
    echo "Records successfully submitted";
  } else {
    echo "There was an error.";
}



//  http://tinyurl/ls5bu83
//  https://www.youtube.com/watch?v=Eiwi9brMMwI 
