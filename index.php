<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>
        TA+LL
    </title>
    <style>
html,body
{
height:100% !important;
}

#wrap   
{
min-height: 100% !important;
}

    </style>
</head>

<body>
    <div id="wrap">
    <div class="jumbotron  text-center" >
        <h1  ><code><span class="text-primary bg-dark"> tatll</span></code></h1>
        <p>A great URL shortener <i>with Bootstrap</i> for the <strong>CSS</strong>.</p>
    </div>

    <?php 
        require 'templates/bodyHome.php';
    ?>

    <?php 
        require 'core/helpers/connectAndPingTheDB.php';
    ?>

    <?php 
        require 'core/helpers/addToLinkages.php';
    ?>
    

    <?php 
        require 'templates/retrieveFromLinkages.php';
    ?>


<footer class="jumbotron text-center" style="margin-bottom:0">
    <p > Made by Evan at <a href="https://www.littlefurnace.com" title="Visit Little Furnace">Little Furnace</a></p>
</footer>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>