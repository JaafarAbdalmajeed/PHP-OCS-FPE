<!-- Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division -->

<?php 

    function calculator($num1, $num2, (string) $operation) {
        $answer = 0
        switch($operation) {
            case '+':$answer = $num1 + $num2;break;
            case '-':$answer = $num1 - $num2;break;
            case '/':$answer = $num1 / $num2;break;
            case '*':$answer = $num1 * $num2;break;
            default:'error something';
        }
        return $answer;
    }
    calculator(7, 3, '+')

?>