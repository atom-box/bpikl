<?php
        require './templates/top.php';
        ?> 

<div class="container" style="margin-top:30px">

        <?php
        // Load the form placeholder
        require 'templates/welcomeCard.php';
        ?>


    <form class="form-inline" action="./templates/success.php">
        <div class="form-group">
        <input type="longurl" class="form-control" id="password1" placeholder="Long URL">
        </div>
        <button type="submit" class="btn btn-info">Shorten it!</button>
        
    </form>


        <?php
        // load the existing results
        // require 'templates/linkCards.php';
        ?>

bootom

<?php
        require './templates/bottom.php';
        ?>