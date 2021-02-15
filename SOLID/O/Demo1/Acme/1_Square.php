<?php

namespace Acme;

class Square
{
    public $width;
    public $height;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}
