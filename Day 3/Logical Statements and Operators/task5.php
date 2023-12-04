<!-- 5.	Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’-->

<?php 
    function checkNumber() {
        $number = 0;
        do {
            $number = readline("Enter number: ")
        } while ($number < 0);
        echo $number * 3;
    }
    checkNumber();

?>






