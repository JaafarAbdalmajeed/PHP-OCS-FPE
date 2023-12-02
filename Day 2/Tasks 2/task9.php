<?php 
    $colors = array("red","blue", "white","yellow");
for($i =0; $i < count($colors); $i++) {
    $colors[$i] = strtoupper( $colors[ $i ] );

}
echo "<pre>";
print_r( $colors );
echo "</pre>";

?>