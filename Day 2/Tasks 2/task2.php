<?php 
    $colors = array('white', 'green', 'red');
    echo '<ul style="list-style: none;">';
    for ($i = 0; $i < count($colors); $i++) {
        echo '<li>';
        echo $colors[$i];
        echo '</li>';
    }
    echo '</ul>';
?>