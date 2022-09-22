<?php

class Word {

    private $name;
    private $definitions;

    public function __construct($json_response) {
        $this->definitions = [];
        $this->name = $json_response->word;
        $definition_array = $json_response->meanings[0]->definitions;
        for ($i = 0; $i < count($definition_array); $i++) {
            $definition = $definition_array[$i]->definition;
            array_push($this->definitions, $definition);
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getDefinitions() {
        return $this->definitions;
    }
}

$file = fopen("define_terms.txt", "r");
$content = fread($file, filesize("define_terms.txt"));
$definable_words = preg_split("/[\s]+/", $content, -1, PREG_SPLIT_NO_EMPTY);
$defined_words = [];

echo "Getting word definitions";
foreach($definable_words as $word) {
    echo ".";
    $context = stream_context_create(['http' => ['ignore_errors' => true]]);
    $response = file_get_contents("https://api.dictionaryapi.dev/api/v2/entries/en/" . $word, false, $context);
    if ($http_response_header[0] == "HTTP/1.1 200 OK") {
        $json_response = json_decode($response)[0];
        $defined_word = new Word($json_response);
        array_push($defined_words, $defined_word);
    }
}

echo "\n\n";

for ($i = 0; $i < count($defined_words); $i++) {
    $word = $defined_words[$i];
    echo $word->getName() . "\n";
    for ($j = 0; $j < count($word->getDefinitions()); $j++) {
        $index = $j + 1;
        echo "\t $index. " . $word->getDefinitions()[$j] . "\n";
    }
}
?>