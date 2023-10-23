<?php

namespace App\Supports;


final class Dates
{

    public static function transformDateBrazilForAmerican(string $value): string
    {
        $date = explode("/", $value);
        list($day, $month, $year) = $date;
        return "$year-$month-$day";
    }
    
}
