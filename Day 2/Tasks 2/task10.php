<?php 
    $colors = array("RED","BLUE", "WHITE","YELLOW");
    for($i = 0; $i < count($colors); $i++) {
        $color = strtolower($colors[$i]);
        $colors[$i] = $color; 
    }

echo "<pre>";
print_r($colors);
echo "</pre>";


?>