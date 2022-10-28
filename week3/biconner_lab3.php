<?php
/*
* @Author Blake Conner
* @Email  biconner@radford.edu
* @Desc   A secret number guessing game, outputs too high or too low based on input
* until you guess the number correctly
*/

$input = 0;
$secret = random_int(1,50);

while($input != $secret){
    $input = readline("Please enter a number between 1 and 50:   ");

    if($input > $secret){
        echo "Too High\n";
    } elseif($input < $secret){
        print("Too Low\n");
    } elseif($input == $secret){
        $winner = sprintf("you got it!! the secret number is " . $secret);
    }

}

echo($winner);

?>