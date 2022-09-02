  <?php
  function genMagicNumList() {
    $mynum = array();
    $index = 0;
    for($i = 1; $i < 71; $i++) {
      $mynum[$index] = $i;
      $index++;
    }
    return $mynum;
  }
  function getTicket() {
    // random_int(int $min, int $max): int
    $lotto = array();
    $a = genMagicNumList();
    $z = 0;
    while($z < 5) {
      $index = random_int(0, count($a) -1);
      $value = $a[$index];
      $lotto[$z] = $value;
      array_splice($a, $index, $index);
      $z++;
    }
    sort($lotto);
    $lotto[count($lotto) -1] = random_int(1, 25);
    return $lotto;
  }
  $size = 10;
  $a = array();
  for($r = 0; $r < $size; $r++) {
      $a[$r] = getTicket();
  }
  for($i = 0; $i < $size; $i++) {
    echo '[';
    for($ii = 0; $ii < 5; $ii++) {
      if($ii == 4) {
        echo $a[$i][$ii];
      }
      else {
      echo $a[$i][$ii] . ' , ';
      }
    }
    echo ']' . "<br>";
  }

  ?>
