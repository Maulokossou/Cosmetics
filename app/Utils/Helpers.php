<?php

use App\Enums\ContractPaymentTypeEnum;
use Carbon\Carbon;
use App\Enums\UserRoleEnum;

function createSlug($str, $delimiter = '-')
{
    $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', "ISO-8859-1//IGNORE", $str))))), $delimiter));
    return $slug;
}


function getFormattedDate($date): String
{
    Carbon::setLocale('fr');
    $new_date = Carbon::createFromDate($date);
    $new_date_format = $new_date->day . ' ' . $new_date->monthName . ' ' . $new_date->year;
    return ucwords($new_date_format);
}

function getDashFormattedDate($date): String
{
    Carbon::setLocale('fr');
    $new_date = Carbon::createFromDate($date);
    $new_date_format = $new_date->day . '-' . $new_date->month . '-' . $new_date->year;
    return ucwords($new_date_format);
}


function getFormattedPrice(int $number)
{
    return number_format($number, 0, ' ', ' ');
}


function formatInvoiceNumber($number) {
    return str_pad($number, 5, '0', STR_PAD_LEFT);
}