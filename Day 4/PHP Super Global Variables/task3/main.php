<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operation = $_POST['operation'];
        $result = 0;
        switch ($operation) {
            case '+': $result = $n1 + $n2; break;
            case '-': $result = $n1 - $n2; break;
            case '*': $result = $n1 * $n2; break;
            case '/': $result = $n1 / $n2; break;
            default: 'Invalid inputs';
        }
        echo 'answer: '. $result;
    }


?>