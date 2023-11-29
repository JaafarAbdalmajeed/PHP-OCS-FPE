<!-- 1. Write a PHP script to get the PHP version and configuration information. -->

<?php
    phpinfo()
?>

<!-- 2. Write a PHP script to display the following strings. 
 Sample String:
'Tomorrow I 'll learn PHP global variables.'
'This is a bad command: del c:\.'
Expected Output:
Tomorrow I'll learn PHP global variables.
This is a bad command: del c:*. * -->

<?php 
    echo"Tomorrow I 'll learn PHP global variables.";
    echo"This is a bad command: del c:*\. *";

?>


<!-- 3. Create a simple HTML form and accept the user’s name and display the name through a PHP echo statement. -->
<html>
    <head>

    </head>
    <body>
        <?php
            echo "Jaafar";
        ?>
    </body>
</html>

<!-- 4. Write a PHP script to get the client's IP address. -->
<?php 
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];
?>

<!-- 5. Write a PHP script to get the current file name. -->
<?php
    $fileName = basename($_SERVER['PHP_SELF']);
    echo $fileName;
?>

<!-- 6. Write a PHP script, which will return the following components of the URL https://www.w3schools.com/php/default.asp. -->

<?php
    $url = 'https://www.w3schools.com/php/default.asp';
    $url = parse_url($url);
    echo $url['schema'].'\n';
    echo $url['host'].'\n';
    echo $url['path'].'\n';
?>
<!-- 7. Write a PHP script, which changes the color of the first character of a word.
Sample string: PHP Tutorial. -->

<?php
$text = 'Example Stack';
$text = preg_replace('/(\b[a-z])/i','<span style="color:blue;">\1</span>',$text);
echo $text;
?>

<!-- 8. Write a PHP script to redirect a user to a different page. -->

<?php
header('Location: C:\xampp\htdocs\PHP-OCS-FPE\Day 1\tasks.php');
?>
