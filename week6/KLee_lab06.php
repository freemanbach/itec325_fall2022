<?php
$f = fopen("define_terms.txt", 'r');
$arr = array();

while(!feof($f)) {
    $word = trim(fgets($f));
    $meaning = json_decode(file_get_contents("https://api.dictionaryapi.dev/api/v2/entries/en/" . $word, false))[0];
    $meaning = $meaning->meanings[0]->definitions[0]->definition;
    $arr[$word] = $meaning;
}
foreach($arr as $v => $k) {
    if(!isset($k)) {
        echo $v . " : " . "definition not found" . "\n"; 
    }
    else {
    echo $v . " : " . $k . "\n"; 
    }
}

?>