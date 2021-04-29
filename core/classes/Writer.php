<?php

include_once '/home/evan/projects/do-not-commit/shortener.txt';

/*
Used for adding data to the flat file which in turn is used by the mod_rewrite when Apache2 does the URL redirect
*/

class Writer {
    private $filename = '';

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function appendLine(string $line): int {
        $file = '/home/evan/projects/do-not-commit/shortener.txt';
        $person = date('Y-m-d H:i:s', time()) . "Bobby Bonilla\n";
        $successFlag = file_put_contents($file, $person, FILE_APPEND | FILE_USE_INCLUDE_PATH | LOCK_EX);
        return $successFlag;
    }

    public function getLastLine(){
        return 'clown car all day' . PHP_EOL;
    }
}