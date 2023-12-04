<!-- 7.	Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome -->

<?php 
    function palindrome($stringInput) {
        $strConvert = '';
        str_replace(' ','',$strConvert);
        str_replace(',','',$strConvert);
        if($strConvert == strrev($strConvert)){
            echo "Yes it is a palindrome";
        } else {
            echo "Yes it is not a palindrome";
        }

    }
?>