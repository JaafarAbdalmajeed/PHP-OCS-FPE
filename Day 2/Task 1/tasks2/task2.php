<?php 
    session_start();
    $time =" Last modified " . date("l, jS F, Y, g:ia", filemtime("page.php"));
    $_SESSION['last_modified_time'] = $time;
?>

<form action="page.php" method="get">
    <input type="submit" value="submit">
</form>