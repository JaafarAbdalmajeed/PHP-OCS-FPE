<!-- 1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number  -->

<?php 
    function primeNumber($number) {
        for ($i = $number - 1; $i > 0; $i++) {
            if($number % $i == 0){
                echo " ". $number. "ia not prime number";
                return false;
            }
        }
    echo " ". $number. " is a prime number";
    }
    $number = 6;
    primeNumber($number);
?>