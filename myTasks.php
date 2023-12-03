<!-- Problem 1: Data Type Conversion
Write a PHP script that takes an integer as input and converts it to a float.
Output the original integer and the converted float. -->

<?php 
    $inputInteger = 44;
    echo "Original Integer: " . $inputInteger;
    echo "<br>";
    echo "Converted Float: " . (double)$inputInteger;
?>

<!-- Problem 2: String Manipulation
Create a PHP function that takes a string as input and outputs the string in reverse order. -->

<?php 
    echo '<br>';
    function reverseStr(string $str) {
        for($i = strlen($str) - 1; $i >= 0; $i--){
            echo $str[$i];
        }
    }

    reverseStr('Jaafar Alwahsh');
?>

<!-- Problem 3: Null Check
Write a PHP script that checks if a variable is set to null. If it is, assign a default value of "No value" and output the result. -->

<?php 
    echo '<br>';
    function nullCheck($value) {
        if(is_null($value)){
            $value = "no value";
            echo"value: ". $value;
            return 0;
        }    
    }
    $i = null;
    nullCheck($i);
?>

<!-- Problem 4: Resource Handling
Create a PHP script that opens a text file for reading, reads its content,
and outputs the number of words in the file. Remember to close the file resource.-->

<?php 

    echo"<br>";
    function resourceHandling($myFile) {
        $text = fopen($myFile, 'r');
        if($text) {
            $count = 0;
            $fileContent = fread($text, filesize($myFile));
            for($i = 0; $i< strlen($fileContent); $i++) {
                if($fileContent[$i] === ' '){
                    $count++;
                }
            }
            $count++;
            echo "number of words in file: ". $count;
            fclose($text);
        } else {
            echo'Filed to open the file';
        }
    }

    resourceHandling("fileText.txt")
?>

<!-- Problem 5: Type Comparison
Write a PHP function that takes two values (of different types) as input and checks if their values are equal. 
Output whether they are equal or not.-->

<?php 
    echo "<br>";
    function typeComparison($value1, $value2) {
        if (gettype($value1) === gettype($value2)) {
            return 1;
        } else {
            return 0;
        }
    }
    $number = 100;
    $word = "8 Hello";
    echo typeComparison($number, (int)$word);
?>

<!-- Problem 6: Data Type Identification
Create a PHP script that takes an array as input and outputs the data type of each element in the array.-->

<?php 
    echo "<br>";
    function dataTypeIdentification($arr) {
        $arrTypes = array();
        foreach($arr as $value) {
            array_push($arrTypes,gettype($value));
        }
        print_r($arrTypes);
    }
    dataTypeIdentification(array(42, "Hello", 3.14, true, null))

?>

<!-- Problem 7: Unset Variable
Write a PHP script that defines a variable, unsets it, and then tries to output its value. 
Handle any errors gracefully. -->

<?php
    echo "<br>";
    $var = "amman";
    // unset($var);
    if(isset($var)){
        echo $var;
    } else {
        echo "no set";
    }
    isset($var)
?>

<!-- Problem 8: Array Operations
Create a PHP function that takes two arrays as input and outputs the intersection of the arrays (common elements). -->

<?php
function intersectionArray($arr1, $arr2) {
    $lenArr1 = count($arr1);
    $intersection = array();

    for ($i = 0; $i < $lenArr1; $i++) {
        foreach ($arr2 as $value) {
            if ($arr1[$i] == $value) {
                array_push($intersection, $value);
            }
        }
    }
    echo "<pre>";
    print_r($intersection);
    echo "</pre>";
}

$array1 = array(1, 2, 3, 4, 5, 6, 43, 62, 59, 21);
$array2 = array(5, 6, 3, 87, 4, 3, 21, 45, 23, 59);
intersectionArray($array1, $array2);
?>

<!-- Problem 9: Typecasting
Write a PHP script that takes a string representing a number and converts it to an actual numeric value. 
Output the original string and the converted numeric value. -->

<?php
    echo "<br>";
?>

<!-- Problem 10: Null Coalescing
Create a PHP script that uses the null coalescing operator (??) to provide a default value if a variable is set to null. 
Output the result. -->

<?php
    echo "<br>";
?>
