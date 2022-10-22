<?php
    function getJoke() {
        $opts = array(
            'http'=>array(
              'method'=>"GET",
              'header'=>"Accept: application/json\r\n"
            )
          );
          
        $context = stream_context_create($opts);
        $response = file_get_contents("https://icanhazdadjoke.com", false, $context);
        $joke = json_decode($response);
        echo "\n". $joke->joke . "\n\n";
    }

    $is_finished = false;
    while(!$is_finished) {
        echo "Please pick an option:\n";
        echo "1. Joke\n";
        echo "2. Exit\n";
        $choice = readline();

        switch ($choice) {
            case "1":
                getJoke();
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