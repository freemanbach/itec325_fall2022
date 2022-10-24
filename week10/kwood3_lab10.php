<?php

function getAge($name) {
    $age_url = "https://api.agify.io/?name=" . $name;
    $age_response = file_get_contents($age_url);
    $age = json_decode($age_response);
    echo "Hi " . $age->name . " it seems like you might be " . $age->age . " years old\n\n";
}

$is_finished = false;

while(!$is_finished) {
    echo "Please select an option\n";
    echo "1. Find age by name\n";
    echo "2. Exit\n";
    $choice = readline();

    switch ($choice) {
        case "1":
            echo "Please enter your name: ";
            $name = readline();
            getAge($name);
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