<!-- 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, 
we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’-->

<?php 
    function season($temperature) {
        if ($temperature < 20) {
            echo "It is winter!";
        } else {
            echo "It is summertime!";
        }
    }
    season(27);

?>