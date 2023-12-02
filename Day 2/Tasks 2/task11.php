<?php 
    $arrDiv = array();
    $start = 200;
    $end = 250;
for ($i = $start; $i < $end; $i++){
    if($i % 4 === 0) {
        array_push($arrDiv, $i);
    }
}
echo "<pre>";
print_r($arrDiv);
echo "</pre>";

?>