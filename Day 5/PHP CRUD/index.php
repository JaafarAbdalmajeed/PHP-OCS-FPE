<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        $arr  = array('id', 'name', 'position', 'salary','active');
        $len = count($arr); 
        echo '<table border="solid1px">';
            echo '<thead>';
                echo '<tr>';
                    echo '<td>id</td>';
                    echo '<td>name</td>';
                    echo '<td>position</td>';
                    echo '<td>salary</td>';
                    echo '<td>active</td>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach($employees as $employee) {
                echo '<tr>';
                for($i = 0; $i < $len; $i++) {
                    
                    if ($arr[$i] === 'active') {
                        echo '<td>';
                            echo '<a href="update.php?id=' . $employee['id'] . '"><i class="fa-solid fa-pen"></i></a>';
                            echo '<a href="remove.php?id=' . $employee['id'] . '"><i class="fa-solid fa-trash"></i></a>';
                        echo '</td>';
                    } else {
                        echo '<td>';
                        echo $employee[$arr[$i]];
                        echo '</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</tbody>';
        echo '</table>';
    ?>
</body>
</html>

