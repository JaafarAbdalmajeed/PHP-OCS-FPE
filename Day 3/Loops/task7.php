<!-- 7.	Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a number is the sum of previous two numbers. 
Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.
Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … -->
<?php 
    
    $arr = array(0 , 1);
    $sum = 0;
    for($i = 1; $i < 50; $i++){
        $sum = $arr[$i] + $arr[$i - 1];
        array_push( $arr,$sum);
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>';


?>