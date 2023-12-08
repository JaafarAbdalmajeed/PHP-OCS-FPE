<!-- 8.	Write a program which will count the "c" characters in the text "Orange Coding Academy". 

Sample Input: Orange Coding Academy
Expected Output: 2 -->
<?php 
    $text = strtolower('Orange Coding Academy');
    $character = strtolower('c');
    $len = strlen($text);
    $count = 0;
    for ($i = 0; $i < $i < $len ; $i++) {
        if ( $text ===  $character) {
            $count++;
        }
    }
    echo $count;




?>