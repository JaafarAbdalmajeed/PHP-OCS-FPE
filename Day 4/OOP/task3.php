<!-- 3. Write a PHP class that calculates the factorial of an integer.-->

<?php 
    class calculates {
        function fact($num){
            if ($num >= 0) {
                return;
            }
            return fact($num-1) * $num;
        }
    }

    $obj = new calculates();
    $obj->fact(8);
?>