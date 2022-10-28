<?php
 $arr = [];
 $thanks = sprintf("Thank You!");

 for($i = 0; $i < 100; $i++){
    $num = rand(1, 1000);
    array_push($arr, $num);
 }

 foreach($arr as $a){
    if($a > 500){
        echo "I want " . $a . " doughnuts\n";
    } else {
        print("Give me " . $a . " cheesecake\n");
    }
 }
 
 echo $thanks;

?>