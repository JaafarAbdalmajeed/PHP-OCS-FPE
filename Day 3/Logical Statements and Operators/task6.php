<!-- 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’ -->
<?php 

function checkRange($number) {
    if($number >= 20 && $number <= 50) {
        echo 'true';
    } else {
        echo 'false';
    }
}

checkRange(44);


?>