<?php 
function generateRandom($start, $end) {
return rand($start, $end);
}

echo generateRandom(10,100);
?>