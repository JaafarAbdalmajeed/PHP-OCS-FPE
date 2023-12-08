<!-- 6.	Determine page requested time. -->
<?php
$requestTime = $_SERVER['REQUEST_TIME'];
$requestTimeFormatted = date('Y-m-d H:i:s', $requestTime);
echo $requestTimeFormatted;
?>