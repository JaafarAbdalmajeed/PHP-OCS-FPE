<!-- 5. Calculate the difference between two dates using the PHP OOP approach. 
Sample Dates : 1981-11-03, 2013-09-04
Expected Result : Difference : 31 years, 10 months, 1 days . -->

<?php
    class CalculateDate {
        function differenceDates($date1, $date2) {
            $date1Array = explode('-', $date1);
            $date2Array = explode('-', $date2);

            $day1 = $date1Array[2];
            $month1 = $date1Array[1];
            $year1 = $date1Array[0];

            $day2 = $date2Array[2];
            $month2 = $date2Array[1];
            $year2 = $date2Array[0];

            $differenceInDays = abs((int)$day2 - (int)$day1);
            $differenceInMonths = abs((int)$month2 - (int)$month1);
            $differenceInYears = abs((int)$year2 - (int)$year1);

            echo "The difference in days between $date1 and $date2 is $differenceInDays days.";
            echo "The difference in months between $month1 and $month2 is $differenceInMonths days.";
            echo "The difference in years between $month1 and $year2 is $differenceInYears days.";
        }
    }

    $obj = new CalculateDate();
    $obj->differenceDates('1981-11-03', '2013-09-04');
?>