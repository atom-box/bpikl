<?php
if (hash_file('SHA384', 'composer-setup.php') === '$COMPOSER) { 
    echo ('Installer verified'); 
    } else { 
        echo 'Installer corrupt'; unlink('composer-setup.php'); 
    } echo PHP_EOL;