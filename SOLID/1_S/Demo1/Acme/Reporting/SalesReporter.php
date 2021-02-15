<?php

// Source: Laracast
namespace Demo1\Acme\Reporting;

/**
 * Class SalesReporter
 *
 * @author Jeffrey Way
 */
class SalesReporter
{
    public function between($startDate, $endDate)
    {
        // perform authentication

        if (! Auth::check()) throw new Exception('Authentication required for reporting.');


        // get sales from db

        $sales = $this->queryDBForSalesBetween($startDate, $endDate);


        // return results
        return $this->format($sales);
    }


    protected function queryDBForSalesBetween($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }


    protected function format($sales)
    {
        return "<h1>Sales: $sales</h1>";
    }
}
