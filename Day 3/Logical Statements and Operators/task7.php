<!-- 7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9 -->
<?php 
    function largestNumber($array) {
        $max = $array[0];
        $len = count($array);
        for($i = 1; $i < $len; $i++) {
            if($array[$i] > $max) {
                $max = $array[$i];
            }
        }
        return $max;
    }
    largestNumber([3,2,66,3,9]);

?>