<!-- 4.	Write PHP to check if the sum of the two given numbers equals 30,
if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’-->

<?php 
    function sum($firstInteger, $secondInteger){
        $sumIntegers = $firstInteger + $secondInteger;
        if($sumIntegers !== 30) {
            echo "false";
        } else {
            echo " true";
        }
    }
    sum(10, 10);    
?>