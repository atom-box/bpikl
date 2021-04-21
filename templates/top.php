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
    <link rel="icon" href="./public/favicon.ico" >
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
            <h1><code><span class="text-primary bg-dark"><a href="index.php">tatll</a> </span></code></h1>
            <p>A free tool to turn <i>long URLs</i> into short links <strong>in seconds</strong>.</p>
            <h3>make this clickable</h3>
        </div>
<!-- the closing tag for this is at footer top -->