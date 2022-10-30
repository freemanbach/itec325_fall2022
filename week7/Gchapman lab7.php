<?php
 $correct = false;
 $answer="Himalayas"
 While(!$correct){
    $guess = readline("Where is the imperial palace located on earth in WH40k(one word): ");
    If($guess!=$answer) {
        echo "incorrect please try again";
        else {
            $correct =true;
        }
    }
 }
    echo "Correct";
?>