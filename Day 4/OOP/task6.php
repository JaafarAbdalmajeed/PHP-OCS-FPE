<!-- 6. Write a PHP script to convert a string to Date and DateTime.
Sample Date : '12-08-2004'
Expected Output : 2004-12-08
Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format. -->

<?php

$sampleDate = '12-08-2004';
$dateInDateFormat = date('Y-m-d', strtotime($sampleDate));
$dateTimeInDateTimeFormat = date('Y-m-d H:i:s', strtotime($sampleDate));
echo "DateTime: $dateTimeInDateTimeFormat\n";
?>