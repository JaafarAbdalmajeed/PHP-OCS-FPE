<!-- 6.	Write a program to calculate and print the factorial of a number using a for loop.
The factorial of a number is the product of all integers up to and including that number.

Sample Input: 5
Expected Output: 120 -->

<?php 
    $number = 5;
    $factorial = 1;
    for ($i = $number; $i > 0; $i--) {
        $factorial *= $i;
    }
    echo $factorial;


?>