<?php

Route::get('/', function()

{
    $report = new Demo1\Acme\Reporting\SalesReporter();

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end);
});
