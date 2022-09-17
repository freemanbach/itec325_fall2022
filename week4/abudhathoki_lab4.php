<?php

function createNewEntry()
{
    $thearray = array(
        'Name' => readline("Enter Practitioner Name: "),
        'email' => readline("Enter Practitioner email: "),
        'Country' => readline("Enter Practitioner Country: ")
    );

    return ($thearray);
}

$newprac = createNewEntry();

var_dump($newprac);

/*The readline function simplifies the anycodings_php task of prompting the user for info from anycodings_php the command line. The PHP:readline anycodings_php Manual page is fairly straightforward, anycodings_php as well, s
ince there is only one anycodings_php argument for the function - the prompt anycodings_php string.

Using readline would allow you to anycodings_php tighten things up a bit, reading values anycodings_php
 directly in the array constructor.*/