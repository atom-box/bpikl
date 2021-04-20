<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>
        TA+LL
    </title>
    <style>
        html,
        xbody {
            height: 100% !important;
        }

        #wrap {
            min-height: 80% !important;
        }
    </style>
</head>
<body>
    <div id="container-fluid wrap">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    User:
                    <?php $user = 'Guest'; echo "mr. " . $guest . " junior"; ?> 
                </a>
            </li>
            <li class="nav-item">
            <span class="nav-link">
                Links:
            </span>    
            </li>
        </ul>
        <div class="jumbotron  text-center">
            <h1><code><span class="text-primary bg-dark"> tatll</span></code></h1>
            <p>A great URL shortener <i>with Bootstrap</i> for the <strong>CSS</strong>.</p>
        </div>
<!-- the closing tag for this is at footer top -->
<div class="container" style="margin-top:30px">

        <?php
        // Load the form placeholder
        require 'templates/bodyHome.php';
        ?>

        <?php
        require 'core/helpers/addToLinkages.php';
        ?>


        <?php
        // load the existing results
        require 'templates/retrieveFromLinkages.php';
        ?>

<!-- the opening tag for this is at  top -->
</div>
        <footer class="footer text-center" style="margin-bottom:0">
            <p> Made by Evan at <a href="https://www.littlefurnace.com" title="Visit Little Furnace">Little Furnace</a></p>
        </footer>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>