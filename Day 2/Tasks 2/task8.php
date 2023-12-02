<?php 
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $mergeArrays = $array1 + $array2;

echo "<pre>";
print_r($mergeArrays);
echo "</pre>";


?>