<?php

namespace Demo2\Acme\Reporting;

use Demo2\Acme\Reporting\SalesOutputInterface;

class HtmlOutput implements SalesOutputInterface
{
    public function output($sales)
    {
         return "<h1>Sales: $sales</h1>";
    }
    
}
