<?php

namespace Demo2\Acme\Repositories;

class SalesRepository
{
    public function between($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
}
