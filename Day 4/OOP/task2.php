<!-- 2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott",
where "Scott" is an argument value of the method within the class. -->

<?php 
    class displaysMsg {
        public $name;
        function printMsg($name) {
            $this->name = $name;
            echo 'Hello All, I am '. $name;
        }
    }

    $obj = new displaysMsg();
    $obj->printMsg('Jaafar');


?>