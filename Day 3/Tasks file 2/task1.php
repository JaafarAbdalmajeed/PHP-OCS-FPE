<!-- 1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’ -->

<?php 
    function leapYear($year){
        if ($year % 400 == 0) {
            echo "‘This year is leap year’";
        } else if ($year % 100 == 0) {
            echo "‘This year is not a leap year’";
        } else if ($year % 4 == 0) {
            echo "‘This year is a leap year’";
        } else {
            echo "‘This year is not a leap year’";
        }
    }
    leapYear(2013);
?>
