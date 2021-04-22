<?php
// in browser, show errors if any
ini_set("display_errors", 1);
error_reporting(E_ALL);

echo ('<h1>hell yeah</h1>');
require './core/helpers/addLinkToDb.php';
require './core/helpers/getLinkCards.php';
