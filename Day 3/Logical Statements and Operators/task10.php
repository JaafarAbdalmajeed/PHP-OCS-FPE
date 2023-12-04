<!-- 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’ -->
 <?php 
    function voting($age) {
        if($age < 18){
            echo "‘is no eligible to vote’"
            return false;
        } else {
            echo "true";
            return true;
        }
    }
    voting(99);
 ?>