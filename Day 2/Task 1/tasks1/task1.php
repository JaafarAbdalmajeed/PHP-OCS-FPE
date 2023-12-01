<?php
    $doctors = array('A' => 1000, 'B' => 1200, 'C' => 1400);

    echo "<table style='border: 2px solid black'>";
    foreach($doctors as $key => $value){
        //create row
        echo "<tr>";

        //create field name 
        echo "<td style='border: 2px solid black'>";
        echo "Salary of Mr.".$key;
        echo "</td>";

        //create field salary
        echo "<td style='border: 2px solid black'>";
        echo $value;
        echo "</td>";

        //end row tag
        echo "</tr>";
    }
    echo "</table>"; 
?>