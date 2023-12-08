<!-- 3.	Create a script to generate the following pattern, using the nested for loop. 

Expected Output:

A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E -->

<?php 
    $arr = array('A','B', 'C', 'D', 'E');
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = $len; $j > $i-1; $j--) {
            echo ' A ';
        }

        for ($j = 0; $j <= $i; $j++) {
            echo ' ' .$arr[$i]. ' ';
        }
        echo '<br>';
    }



?>