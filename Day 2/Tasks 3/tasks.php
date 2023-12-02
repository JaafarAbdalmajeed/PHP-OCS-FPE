<!-- 1.	Write a PHP script to: 

a.	Convert the entered string to uppercase.
b.	Convert the entered string to lowercase.
c.	Make the first letter of the string uppercase.
d.	Make the first letter of each word capitalized. -->

<!-- a. -->
<?php 
    $word = 'amman';
    $word = strtoupper($word);
?>
<!-- b. -->
<?php 
    $word = 'AMMAN';
    $word =  strtolower($word);
?>
<!-- c. -->
<?php 
    $word = 'jordan';
    $word = ucfirst($word);

?>
<!-- d. -->
<?php 
    $word = 'jordan';
    $word = ucwords($word);
?>



<!-- 2.	Write a PHP script splitting the following numeric string to be a date format. 

Sample Output: '085119'
Expected Output: 08:51:19 -->

<?php
$numericString = '085119';

// Extract hours, minutes, and seconds
$hours = substr($numericString, 0, 2);
$minutes = substr($numericString, 2, 2);
$seconds = substr($numericString, 4, 2);

// Format as time
$timeFormat = "$hours:$minutes:$seconds";


echo $timeFormat;
?>


<!-- 3.	Write a PHP script to check whether the sentence contains a specific word.

Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!’ -->
<?php 
    echo "<br>";
    function check($sentence, $word) {
    $arrWords = explode(' ', $sentence);
    for($i = 0; $i < count($arrWords); $i++) {
        if($arrWords[$i] == $word) {
            echo "‘Word Found’";
        }
    }
    
    }
    
    check("I am a full stack developer at orange coding academy", "orane");

    echo "<br>";
?>



<!-- 4.	Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php' -->
<?php 
echo "<br>";

function extractName($url) {
    $name = '';
    $len = strlen($url) - 1;
    for ($i = $len; $i > 0; $i--) {
        if ($url[$i] == '/') {
            $name = substr($url, $i + 1, $len); // Fix here
            echo $name;
            break;
        }
    }
}
extractName('www.orange.com/index.php');
echo "<br>";
?>





<!-- 5.	Write a PHP script to extract the username from the following email address. 

Sample Output: 'info@orange.com'
Expected Output: 'info' -->
<?php 
    echo "<br>";

function extractUsername($email) {
    $name = '';
    $len = strlen($email);
    for($i = 0; $i < $len ; $i++) {
        if($email[$i] === '@'){
            break;
        } else {
            $name .= $email[$i];
        }
    }
    echo $name;
}
extractUsername('info@orange.com');
    echo "<br>";
?>



<!-- 6.	Write a PHP script to get the last three characters from the string. 

Sample Output: 'info@orange.com'
Expected Output: 'com' -->
<?php 
echo "<br>";
    function lastThree($strings) {
        $output = substr($strings, -3);
        echo $output;
    }
    lastThree('info@orange.com');
echo "<br>";
?>



<!-- 7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 

Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'

Expected Output: 254ABCc or h242sfeDAFEe32  -> random number  -->

<?php 
echo "<br>";
function generateRandomPassword($characters,$lenPass) {
    $password = '';
    $charLength = strlen($characters);

    for ($i = 0; $i < $lenPass; $i++) {
        $randomIndex = random_int(0, $charLength - 1);
        $password .= $characters[$randomIndex];
    }
    return $password;
}

$characterSet = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    $lenPass = rand(0,12);
$randomPassword = generateRandomPassword($characterSet, $lenPass);

echo "Generated Password: $randomPassword";

echo "<br>";
?>



<!-- 8.	Write a PHP script to replace the first word of the sentence with another word.

Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius. -->

<?php 

    echo "<br>";
    $inputSentence = 'That new trainee is so genius.';
    $inputWord = 'Our';
    $arrayWords = explode(' ',$inputSentence);
    $arrayWords[0] = $inputWord; 
    $output = join(' ',$arrayWords);
    echo $output;
    echo "<br>";
?>



<!-- 9.	Write a PHP script to find the first character that is different between two strings. 

String1 : 'dragonball'
String2 : 'dragonboll'
Expected Result : First difference between two strings at position 7: "a" vs "o" -->

<?php 
echo "<br>";
function compareWords($word1, $word2) {
    $len = min(strlen($word1), strlen($word2));
        for($i = 0 ; $i < $len ; $i++) {
            if($word1[$i] !== $word2[$i]){
            echo "First difference between two strings at position $i: $word1[$i] vs $word2[$i]";
            break;
            }
        }
    }
echo "<br>";
?>



<!-- 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

Sample Output: "Twinkle, twinkle, little star."
Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”} -->
<?php 
echo "<br>";
    $inputString = 'Twinkle, twinkle, little star';
    $arrString = explode(',', $inputString);
    var_dump($arrString);
echo "<br>";
?>





<!-- 11.	Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a' -->
<?php 
echo "<br>";
echo "<br>";
?>



<!-- 12.	Write a PHP script to insert a string at the specified position in a given string. 

Original String: 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output: 'The quick brown fox'
18. Write a PHP script to get the first word of a sentence. 
Original String: 'The quick brown fox'
Expected Output: 'The' -->

<?php 
echo "<br>";
echo "<br>";
?>



<!-- 13.	Write a PHP script to remove zeroes from the given number. 

Original String: '0000657022.24'
Expected Output: '65722.24' -->


<?php 
echo "<br>";
echo "<br>";
?>


<!-- 14.	Write a PHP script to remove part of a string. 

Original String: 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output: 'The quick brown jumps over the lazy dog' -->
<?php 
echo "<br>";
echo "<br>";
?>





<!-- 15.	Write a PHP script to remove trailing dashes from a string. 

Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog' -->

<?php 
echo "<br>";
echo "<br>";
?>


<!-- 16.	Write a PHP script to remove Special characters from the following string. 

Sample Output: '\"\1+2/3*2:2-3/4*3'
Expected Output: '1 2 3 2 2 3 4 3' -->

<?php 
echo "<br>";
echo "<br>";
?>


<!-- 17.	Write a PHP script to select first 5 words from the following string. 

Sample Output: 'The quick brown fox jumps over the lazy dog'
Expected Output: 'The quick brown fox jumps' -->

<?php 
echo "<br>";
echo "<br>";
?>


<!-- 18.	Write a PHP script to remove comma(s) from the following numeric string.

Sample Output: '2,543.12'
Expected Output: 2543.12 -->

<?php 
echo "<br>";
echo "<br>";
?>


<!-- 19.	Write a PHP script to print letters from 'a' to 'z'. 
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z  -->


<?php 
echo "<br>";
echo "<br>";
?>