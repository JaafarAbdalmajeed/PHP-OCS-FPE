<!-- 4.	Create a script to generate the following pattern, using the nested for loop. 

Expected Output:

1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5 -->


<?php 
    $arr = array(1, 2, 3, 4, 5);
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = $len -1; $j > $i; $j--) {
            echo ' '. '1'. ' ';
        }

        for ($j = 0; $j < $i+1; $j++) {
            echo ' '.$arr[$i]. ' ';
        }

        echo '<br>';
    }

?>