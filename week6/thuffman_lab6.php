<?php

  $file = fopen("define_terms.txt", "r");
  $arr = array();
  $i = 0;
  error_reporting(E_ERROR | E_PARSE);
  while(!feof($file)){
    $line = trim(fgets($file));
    
    $def = json_decode(file_get_contents("https://api.dictionaryapi.dev/api/v2/entries/en/" . $line, false))[0];
    if ($http_response_header[0] == "HTTP/1.1 200 OK") {
      $def = $def->meanings[0]->definitions[0]->definition;
      $arr[$line] = $def;
    } else {
      $def = "No definition found.";
      $arr[$line] = $def;
    }

    
    $i++;
  }
foreach($arr as $val => $def){
  echo $val . " - " . $def . "\n";
}