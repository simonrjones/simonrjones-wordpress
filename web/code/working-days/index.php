<?php

$from = '2022-05-01';
$to = '2023-04-30';
$bankHolidays = file_get_contents('https://www.gov.uk/bank-holidays/england-and-wales.ics');

$from = new DateTime($from);
$to = new DateTime($to);

/**
 * Loop through dates from to
 * Increment all that are Mon to Fri
 * Exclude any that appear in bank holiday list
 */