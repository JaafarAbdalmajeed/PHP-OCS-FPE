<!-- 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’ -->

<?php 
    function calculating($score) {
        if ($score > 90 && $score <= 100) {
            echo 'A';
            return;
        } else if ($score > 80 && $score <= 90) {
            echo 'B';
            return;
        } else if ($score > 70 && $score <= 80) {
            echo 'C';
            return;
        } else if ($score > 60 && $score <= 70) {
            echo 'D';
            return;
        } else if ($score <= 60){
            echo 'F';
            return;
        } else {
            echo 'invalid score';
            return;
        }
    }

    calculating(66);
?>