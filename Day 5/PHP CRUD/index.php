<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>  
    <h1>Employees Details</h1>
    <form action="add.php">
        <input type="submit" value="Add Employee">
    </form>
    </div>
    <?php 
        require_once('db.php');
        try {
            $schemaStatement = $conn->query('SELECT * FROM employees');
            $employees = $schemaStatement -> fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERROR: '. $e->getMessage();
        }
        $arr  = array('id', 'name', 'position', 'salary');
        $len = count($arr); 
        echo '<table border="solid1px">';
        foreach($employees as $employee) {
            echo '<tr>';
            for($i = 0; $i < $len; $i++) {
                echo '<td>';
                echo $employee[$arr[$i]];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    ?>
</body>
</html>

