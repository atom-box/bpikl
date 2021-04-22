<?php
// in browser, show errors if any
ini_set("display_errors", 1);
error_reporting(E_ALL);
echo ('<h2>heeeeeyyyyyyyy</h2>');
echo ('<h2>' . $_POST["longurl"] . '</h2>');
require './core/helpers/addLinkToDb.php';
require './core/helpers/getLinkCards.php';
