<?php 
    $arr = array(1, 2, 3, 4, 5);
    array_splice( $arr,3,0,'$');
    echo '<pre>';
        print_r( $arr);
    echo '</pre>';

?>