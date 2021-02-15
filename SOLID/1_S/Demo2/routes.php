<?php

Route::get('/', function()

{
    $report = new Demo2\Acme\Reporting\SalesReporter(new Demo2\Acme\Repositories\SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end , new Demo2\Acme\Reporting\HtmlOutput);
});
