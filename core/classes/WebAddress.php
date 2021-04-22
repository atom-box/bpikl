<?php

interface stringulator {
    public function shortify(): void;
}


class WebAddress implements stringulator {
    public $short;
    public $long;
    
    public function __construct(string $long, $short = '') {
        $this->long = $long;
        $this->short = $short;
    }

    public function getLong(): string{
        return $this->long;
    }
    
    public function getShort(): string{
        return $this->short;
    }
    

    public function shortify(): void {
        // TODO  SOME KIND OF LOGIC HERE
        $this->short = random_int(10000, 99999); // todo
    }


}