<?php

// Source: Laracast
namespace Demo2\Acme\Reporting;

use Demo2\Acme\Repositories\SalesRepository;
use Demo2\Acme\Reporting\SalesOutputInterface;

/**
 * Class SalesReporter
 *
 * @author Jeffrey Way
 */
class SalesReporter
{
    /** @var SalesRepository */
    private $repo;

    /**
     * @param object SalesRepository $repo
     */
    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }
    
    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
        $sales = $this->repo->between($startDate, $endDate);


        $formatter->output($sales);
    }
}

// O/P Sales: 48.27
