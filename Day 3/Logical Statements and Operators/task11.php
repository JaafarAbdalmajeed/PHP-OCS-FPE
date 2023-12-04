<!-- 11.	Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’ -->

<?php 
    function checkNum($num) {
        if ($num > 0) {
            echo 'Positive';
            return;
        } else if ($num < 0) {
            echo '‘Negative’';
            return;
        } else {
            echo 'Zero';
            return;
        }
    }
    checkNum(0)

?>