<?php
$currentDay = date('w');

if ($currentDay == 0) {
    echo "Happy Sunday!";
} else {
    echo "It's not Sunday today.";
}
?>


<?php
// Example of different date format characters
echo "<br><br>";
echo date('d') . " - " . " -  Day of the month, 2 digits with leading zeros (01 to 31)<br>";
echo date('m') . " - " . " -  Numeric representation of a month, with leading zeros (01 to 12)<br>";
echo date('Y') . " - " . " -  Four-digit representation of a year<br>";
echo date('D') . " - " . " -  A textual representation of a day, three letters (Mon through Sun)<br>";
echo date('l') . " - " . " -  A full textual representation of the day of the week (Sunday through Saturday)<br>";
echo date('S') . " - " . " -  English ordinal suffix for the day of the month (st, nd, rd, or th)<br>";
echo date('F') . " - " . " -  A full textual representation of a month (January through December)<br>";
echo date('M') . " - " . " -  A short textual representation of a month, three letters (Jan through Dec)<br>";
echo date('n') . " - " . " -  Numeric representation of a month without leading zeros (1 to 12)<br>";
echo date('H') . " - " . " -  24-hour format of an hour with leading zeros (00 to 23)<br>";
echo date('i') . " - " . " -  Minutes with leading zeros (00 to 59)<br>";
echo date('s') . " - " . " -  Seconds with leading zeros (00 to 59)<br>";
echo date('a') . " - " . " -  Lowercase Ante meridiem and Post meridiem (am or pm)<br>";
echo date('A') . " - " . " -  Uppercase Ante meridiem and Post meridiem (AM or PM)<br>";
echo date('g') . " - " . " -  12-hour format of an hour without leading zeros (1 to 12)<br>";
echo date('G') . " - " . " -  24-hour format of an hour without leading zeros (0 to 23)<br>";
echo date('h') . " - " . " -  12-hour format of an hour with leading zeros (01 to 12)<br>";
echo date('y') . " - " . " -  Two-digit representation of a year (00 through 99)<br><br>";

echo date('U') . " - " . " - Seconds since the Unix Epoch (timestamp)<br>";
echo date('O') . " - " . " - Difference to GMT in hours, with colon (e.g., +0200)<br>";
echo date('P') . " - " . " - Difference to GMT in hours, with colon (RFC 822 format, e.g., +02:00)<br>";
echo date('c') . " - " . " - ISO 8601 date (e.g., 2024-01-29T15:45:30+02:00)<br>";
echo date('r') . " - " . " - RFC 2822 formatted date (e.g., Thu, 29 Jan 2024 15:45:30 +0200)<br>";
echo date('T') . " - " . " - Timezone abbreviation (e.g., EST, MDT)<br>";
echo date('W') . " - " . " - ISO-8601 week number of year (e.g., 04)<br><br>";

// Combine format characters
echo date('D M j, Y H:i:s');  // A custom date and time format (e.g., Tue, Jan 29, 2024 15:45:30)
?>
