<!-- 8.	Write PHP script to calculate the monthly electricity bill according to these rules
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit -->

<?php 
    function calculateElectricity($units) {
        $role1 = 2.50;
        $role2 = 5.00;
        $role3 = 6.20;
        $role4 = 7.50;

        $bill = 0;

        if ($units <= 50) {
            $bill = $units * $role1;
        } else {
            $bill += 50 * $role1;
            $units -= 50;
            if ($units <= 100) {
                $bill += $units * $role2;
            } else {
                $bill += 100 * $role2;
                $units -= 100;
                if ($units <= 100) {
                    $bill += $units * $role3;
                } else {
                    $bill += 100 * $role3;
                    $units -= 100;
                    $bill += $units * $role4;
                }
            }
        }
        return $bill;
    }   
    calculateElectricity($units);


?>