<!-- 6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number -->

<?php 
    function armstrongNum($num){
        $numStr = (string) $num;
        $sum = 0;
        for($i =0; $i < strlen($numStr); $i++){
            $digit = (int) $numStr[$i]; 
            $sum += $digit * $digit * $digit;
        }
        
        echo $sum;
    }

?>