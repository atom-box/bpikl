<?php
// in browser, show errors if any
ini_set("display_errors", 1);
error_reporting(E_ALL);

/*
Creates a pair of pronounceable 3 letter words followed by a two digit number
I hope this makes the links easier to remember.
*/
// DO
//     have a loop to crank out random alphas
//     GET that from mysql.  
// while (found) repeat above

// append
// return

public function shortify(string $long): string {

    $randomString = '';
    do {
        # code...
        $A_z = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*({?';
        for ($i = 0; $i < 6; $i++) { 
            $randomString .= $A_z[random_int(0, 63)]; 
        }
        
    } while (false); // change this to look for in db
    return $randomString;
}

