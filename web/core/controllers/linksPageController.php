<?php
// todo remove multiple ini_set after debugging
ini_set("display_errors", 1);
error_reporting(E_ALL);

require './templates/top.php';
?>


<div class="container" style="margin-top:30px">
<!-- will be closed by bottom.php -->

<?php

if (isset($_POST['longurl'])) {
    require './core/helpers/addLinkToDb.php';
    require './templates/successCard.php';
}

require './core/helpers/getLinkCards.php';
require './templates/bottom.php';
?>
