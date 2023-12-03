<!-- 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, 
then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12 -->

<?php 
    function sumAndTriple($firstInteger, $secondInteger) {
        if($num1 !== $num2) {
            echo "the numbers not equals"; 
            return;
        }

        $answer = ($firstInteger + $secondInteger) * 3;
    }
    sumAndTriple(2,2);

?>

