<!-- Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok  -->

<?php 
    $strInput = 'Jaafar';
    $strOutput = strtolower($strInput);
    if($strInput !== $strOutput) {
        echo 'Your String is NO';
    } else {
        echo 'Your String is Ok';
    }

    
?>
