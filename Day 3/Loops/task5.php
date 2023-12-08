<!-- 5.	Create a script to generate the following pattern, using the nested for loop. 

Expected Output:

1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5 -->

<?php 
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if( $j == $i) {
                echo ' '. $i+1 . ' ';
            } else {
                echo ' '. '0' . ' ';
            }
        }
        echo '<br>';
    }
?>