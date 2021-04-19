<?php

namespace App\Entity;

// The UrlType field is a text field that prepends the submitted value with a given protocol (e.g. http://) if the submitted value doesn’t already have a protocol.
// https://symfony.com/doc/4.4/reference/forms/types/url.html

class LongUrl
{
    protected $rawUrl;
    protected $shortUrl;

    public function __construct(String $rawUrl = '')
    {
        $this->rawUrl = $rawUrl;
        $this->shortUrl  = 'waterloo';
    }

    public function getRawUrl(): string
    {
        return $this->rawUrl;
    }

    public function setRawUrl(string $rawUrl): void
    {
        $this->rawUrl = $rawUrl;
    }

    public function getShortUrl(): string
    {
        return $this->shortUrl;
    }

    // shortify function is in UrlFormController.php
}
