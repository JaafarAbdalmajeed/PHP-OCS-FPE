<!-- 5.	determine the project name, and script name -->
<?php
$projectName = basename(__DIR__);

$scriptName = basename($_SERVER['PHP_SELF']);

echo "Project: $projectName<br>";
echo "Script: $scriptName<br>";
?>