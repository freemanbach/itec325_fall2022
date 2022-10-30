<?php
    $fav=9;
    $guess = readline("Please guess my favorite number: ");
    if($guess>$fav){
    $message = sprintf("Too High!");
    }
    else if($guess<$fav){
    $message = sprintf("Too low!");
    }
    else{
    $message = sprintf("Correct!");    
    }
    echo $message;
?>