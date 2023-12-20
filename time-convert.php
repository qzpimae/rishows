<?php

function convertEstToUtc($estDateTimeString) {
    // create a DateTime object
    $estDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $estDateTimeString, new DateTimeZone('America/New_York'));

    // convert datetime
    $estDateTime->setTimezone(new DateTimeZone('UTC'));

    // create string
    $utcDateTimeString = $estDateTime->format('Y-m-d H:i:s');
    return $utcDateTimeString;
}

// TESTING
$estDateTimeString = '2023-12-31 22:00:00';
$utcDateTimeString = convertEstToUtc($estDateTimeString);

echo "EST datetime: $estDateTimeString\n";
echo "UTC datetime: $utcDateTimeString";

?>
