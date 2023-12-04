<?php 
    class printStr {
        function printString($str) {
            echo $str;
        }
    }
    $objPrint = new printStr();
    $objPrint->printString('MyClass class has initialized!');
?>