<!-- 12.	Write a PHP program to print the following pattern. 
Expected Output:
    A 
   A B 
  A B C 
 A B C D 
A B C D E 
 A B C D 
  A B C 
   A B 
    A -->

<?php 
    $arr = array('A', 'B', 'C', 'D', 'E');
    

    for ($i = 0; $i < 5; $i++) {

        for ($j = 5; $j > $i; $j--) {
            echo '_';
        }
        for ($j = 0; $j < (5 - $i - 1); $j++) {
            echo ' ';
        }

        // Print letters
        for ($j = 0; $j <= $i; $j++) {
            echo $arr[$j] . ' ';
        }

        echo '<br>';
    }

    // Lower half of the pattern
    for ($i = 1; $i < 5; $i++) {
        // Print spaces
        for ($j = 0; $j <= $i; $j++) {
            echo '_';
        }
       

        // Print letters
        for ($j = 0; $j < (5 - $i); $j++) {
            echo $arr[$j] . ' ';
        }

        echo '<br>';
    }
?>