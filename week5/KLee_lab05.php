<?php
$f = fopen("data.txt",'r');
for($i = 0; $i < 30; $i++) {
    echo fgets($f);
}
?>