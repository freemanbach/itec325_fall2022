<?php
$correct = false;
$count=0
while($count != 3||$count != -3){
    $rando = rand(1, 10);
    echo "new number!"
    While(!$correct){
        $guess = readline("Pick a number between 1-10: ");
        If(intval($guess)!=$rando) {
            echo "incorrect please try again";
            $count--;
            else {
                echo "Correct!";
                $count++;
                $correct =true;
            }
        }    
    }
}
if($count==3){
    echo "You win!";
}
else{
    echo "You Lose...";
}
?>