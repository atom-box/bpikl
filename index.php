<?php
    require './templates/top.php';
    // in browser, show errors if any

?> 

<div class="container" style="margin-top:30px">
<!-- will be closed by bottom.php -->

<?php
    require './core/controllers/welcomeController.php';
?>

<?php
    require './templates/bottom.php';
?>