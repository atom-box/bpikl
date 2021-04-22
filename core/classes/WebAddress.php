<?php

interface stringulator {
    public function shortify(): void;
}


class WebAddress implements stringulator {
    private const SHORTSTUB = 'https://tat.us/';
    
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

    private function vowel(): string{
        $a_y = 'aeiouy';
        return $a_y[random_int(0,5)];
    }

    private function consonant(): string{
        $b_z = 'bcdfghjklmnpqrstvwxz';
        return $b_z[random_int(0,19)];
    }

    private function digit(): string{
        $nums = '1234567890';
        return $nums[random_int(0,9)];
    }

    public function shortify(): void {
        // trying to make it memorable
        // 576,000 permutations possible before a repeat needed
        $this->short = self::SHORTSTUB;
        $this->short .= 
            $this->consonant().
            $this->vowel().
            $this->consonant().
            $this->consonant().
            $this->vowel().
            $this->consonant().
            $this->digit().
            $this->digit();
    }
}