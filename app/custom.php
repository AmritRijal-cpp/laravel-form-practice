<?php

function getIntDate($strDate)
{
    [$year, $month, $day] = explode('-', $strDate);

    return (int) (sprintf('%04d%02d%02d', $year, $month, $day));
}
function toNepaliDate(string $date)
{
    [$year, $month, $day] = [
        substr($date, 0, 4),
        substr($date, 4, 2),
        substr($date, 6, 2)
    ];
    return sprintf("%04d-%02d-%02d", $year, $month, $day);

}

function formatDate(string $value)
{
    [$year, $month, $day] = explode('-', $value);
    return sprintf('%04d-%02d-%02d', $year, $month, $day);
}

