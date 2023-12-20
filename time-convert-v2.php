<?php

function convertEstToUtc($estDate, $estTime) {
    $estDateTimeString = $estDate . ' ' . $estTime;
    $estDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $estDateTimeString, new DateTimeZone('America/New_York'));
    $estDateTime->setTimezone(new DateTimeZone('UTC'));
    $utcDateTimeString = $estDateTime->format('Y-m-d H:i:s');
    return $utcDateTimeString;
}


$estDate = '2023-01-01';
$estTime = '12:00:00';
$utcDateTimeString = convertEstToUtc($estDate, $estTime);

echo "EST datetime: $estDate $estTime\n";
echo "UTC datetime: $utcDateTimeString";

?>
