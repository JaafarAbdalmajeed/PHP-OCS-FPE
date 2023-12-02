<?php 
function selectionSort($array, $len)
    {
        $n = count($array);

        for ($i = 0; $i < $n - 1; $i++) {
            // Find the minimum element in the unsorted part of the array
            $minIndex = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($array[$j] < $array[$minIndex]) {
                    $minIndex = $j;
                }
            }

            // Swap the found minimum element with the first element
            $temp = $array[$minIndex];
            $array[$minIndex] = $array[$i];
            $array[$i] = $temp;
        }
        return $array;
    }
?>

<?php 
    $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $average = 0;
    $minReads = array();
    $maxReads = array();
    $lenOfArr = count($temperatures);
    $arraySort = selectionSort($temperatures, $lenOfArr);
    for($i = 0; $i < $lenOfArr; $i++) {
        $average += $lenOfArr;
        if($i < 5){
            array_push($minReads , $arraySort[$i]);
        }
        if($i >= $lenOfArr-6){
            array_push($maxReads, $arraySort[$i]);
        }
    }


    echo "Average Temperature is: ". $average / $lenOfArr;
    echo "<br>";
    echo "List of seven lowest temperatures: ";
    foreach( $minReads as $read ) {
        echo $read. ", ";
    }
    echo "<br>";
echo "List of seven highest temperatures: ";
foreach( $maxReads as $read) {
    echo $read. ", ";
}


    


?>