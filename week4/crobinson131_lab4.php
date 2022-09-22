<?php
$num = 1;


echo "For loop: \n";
for ($i = 0; $i < 10; $i++){
  echo $num . " ";
  $num += 1;
}
echo "\n";
echo "\n";

$num -= 1;
echo "While loop: \n";
while ($num > 0){
  echo $num . " ";
  $num -= 1;
}

?>
