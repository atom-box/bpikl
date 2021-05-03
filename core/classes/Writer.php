<?php


/*
Used for adding data to the flat file which in turn is used by the mod_rewrite when Apache2 does the URL redirect
*/

class Writer {

    public function __construct(string $filename)
    {
        $this->file = $filename;
    }

    public function appendLine(string $line): int {
        $successFlag = file_put_contents($this->file, $line, FILE_APPEND | FILE_USE_INCLUDE_PATH | LOCK_EX);
        // todo     echo('writer class says it wrote to here::::: ' . $this->file . PHP_EOL);
        return $successFlag;
    }

    public function getAllLines(){
        $outString = file_get_contents($this->file);
        return $outString;
    }
}