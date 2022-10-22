<?php

function getWeather($zipcode) {
    $api_key = "b4c14bd77539c3dd0d66a11a8d049d9f";
    $geo_url = "http://api.openweathermap.org/geo/1.0/zip?zip=". $zipcode ."&appid=". $api_key;
    $geo_response = file_get_contents($geo_url);
    $geo = json_decode($geo_response);
    $weather_url = "https://api.openweathermap.org/data/2.5/weather?units=imperial&lat=". $geo->lat ."&lon=" . $geo->lon ."&appid=" . $api_key;
    $weather_response = file_get_contents($weather_url);
    $weather = json_decode($weather_response);
    echo "It is " . $weather->main->temp . "°F in " . $weather->name . "\n";
}

$is_finished = false;

while(!$is_finished) {
    echo "Please select an option\n";
    echo "1. Find weather by zipcode\n";
    echo "2. Exit\n";
    $choice = readline();

    switch ($choice) {
        case "1":
            echo "Please enter a valid zipcode: ";
            $zipcode = readline();
            getWeather($zipcode);
            break;
        case "2":
            $is_finished = true;
            break;
        default:
            echo "\nThat is not a valid option\n\n";
            break;
    }
}
?>