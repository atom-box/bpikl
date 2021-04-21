<?php

interface stringulator {
    public function shortify(): string;
}

class WebAddress implements stringulator {
    public $short;
    public $longurl;
    
    public function __construct(string $longurl) {
        $this->longurl = $longurl;
    }

    public function shortify(): string {
        $this->short = 'strawberry';
        return $this->short;
    }


}