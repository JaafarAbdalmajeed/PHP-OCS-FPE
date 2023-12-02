<?php 
    $words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
    $min = strlen($words[0]);
    $max = strlen($words[0]);

    for ($i = 1; $i < count($words); $i++) {
        if (strlen($words[$i]) < $min) {
            $min = strlen($words[$i]);
        }
        if (strlen($words[$i]) > $max) {
            $max = strlen($words[$i]);
        }
    }

    echo "The shortest word length is " . $min . ". The longest word length is " . $max . ".";
?>