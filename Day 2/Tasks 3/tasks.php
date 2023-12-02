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
?>


<!-- 3.	Write a PHP script to check whether the sentence contains a specific word.

Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!’ -->
<?php ?>



<!-- 4.	Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php' -->
<?php ?>





<!-- 5.	Write a PHP script to extract the username from the following email address. 

Sample Output: 'info@orange.com'
Expected Output: 'info' -->
<?php ?>



<!-- 6.	Write a PHP script to get the last three characters from the string. 

Sample Output: 'info@orange.com'
Expected Output: 'com' -->
<?php ?>



<!-- 7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 

Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'

Expected Output: 254ABCc or h242sfeDAFEe32  -> random number  -->

<?php ?>
<!-- 8.	Write a PHP script to replace the first word of the sentence with another word.

Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius. -->

<?php ?>



<!-- 9.	Write a PHP script to find the first character that is different between two strings. 

String1 : 'dragonball'
String2 : 'dragonboll'
Expected Result : First difference between two strings at position 7: "a" vs "o" -->

<?php ?>



<!-- 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

Sample Output: "Twinkle, twinkle, little star."
Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”} -->
<?php ?>





<!-- 11.	Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a' -->
<?php ?>



<!-- 12.	Write a PHP script to insert a string at the specified position in a given string. 

Original String: 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output: 'The quick brown fox'
18. Write a PHP script to get the first word of a sentence. 
Original String: 'The quick brown fox'
Expected Output: 'The' -->

<?php ?>



<!-- 13.	Write a PHP script to remove zeroes from the given number. 

Original String: '0000657022.24'
Expected Output: '65722.24' -->


<?php ?>


<!-- 14.	Write a PHP script to remove part of a string. 

Original String: 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output: 'The quick brown jumps over the lazy dog' -->
<?php ?>





<!-- 15.	Write a PHP script to remove trailing dashes from a string. 

Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog' -->

<?php ?>


<!-- 16.	Write a PHP script to remove Special characters from the following string. 

Sample Output: '\"\1+2/3*2:2-3/4*3'
Expected Output: '1 2 3 2 2 3 4 3' -->

<?php ?>


<!-- 17.	Write a PHP script to select first 5 words from the following string. 

Sample Output: 'The quick brown fox jumps over the lazy dog'
Expected Output: 'The quick brown fox jumps' -->

<?php ?>


<!-- 18.	Write a PHP script to remove comma(s) from the following numeric string.

Sample Output: '2,543.12'
Expected Output: 2543.12 -->

<?php ?>


<!-- 19.	Write a PHP script to print letters from 'a' to 'z'. 
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z  -->


<?php ?>