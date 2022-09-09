<?php
function greaterThan($numOne = 2, $numTwo = 1){
  if($numOne > $numTwo)
  {

    echo $numOne . " is larger than " . $numTwo . ".\n";

  }
  elseif($numTwo > $numOne)
  {

    echo $numTwo . " is larger than " . $numOne . ".\n";

  }
  else
  {

    echo $numOne . " and " . $numTwo . " are equal.\n";

  }
}

print("Default values: \n");
greaterThan();

print("\n");
print("User input: \n");
$ui = "y";
while($ui === "y" or $ui === "Y"){
  $numOne = (int)readline("Enter a number: ");
  $numTwo = (int)readline("Enter a second number: ");
  greaterThan($numOne, $numTwo);
  $ui = (String)readline("Try another number? (y/n) ");
}
print("Goodbye!");

?>
