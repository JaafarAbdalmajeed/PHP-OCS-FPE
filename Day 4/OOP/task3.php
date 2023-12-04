<!-- 3. Write a PHP class that calculates the factorial of an integer.-->

<?php 
    class calculates {
        function fact($num){
            if ($num <= 1) {
                return 1; 
            }
            return $this->fact($num - 1) * $num;
        }
    }

    $obj = new calculates();
    $result = $obj->fact(8);
    echo $result;
?>