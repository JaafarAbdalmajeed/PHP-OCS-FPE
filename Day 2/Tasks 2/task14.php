<?php 
    $array1 = array( 2, 0, 10, 12, 6);
    $min = $array1[0];
    foreach( $array1 as $value){
        if( $value < $min && $value !== 0){
                $min = $value;
            }

    }
echo "". $min ."";

?>