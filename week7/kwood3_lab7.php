<?php
$numbers = [
    "(279)483-0938",
    "546-293-1038",
    "5468391037",
    "291.594.1039",
    "24141",
    "04-28-1993",
    "100 East Main Street",
    "VKE-4738",
    "385-102",
    "436-47-2049"
];

$phone_pattern = "/^(\(?[0-9]{3,3}\)?)?(-|.)?[0-9]{3,3}(-|.)?[0-9]{4,4}$/";

$i = 0;

foreach ($numbers as $number) {
    if (preg_match($phone_pattern, $number)) {
        echo $number . " seems to be a phone number. Try calling it!\n";
        $i++;
    }
}

echo "We found " . $i . " phone numbers\n"
?>