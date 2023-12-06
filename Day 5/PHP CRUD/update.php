<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter name">

        <label for="position">position</label>
        <input type="text" name="position" id="position" placeholder="enter position">

        <label for="salary">salary</label>
        <input type="text" name="salary" id="salary" placeholder="enter salary">

        <input type="submit" value="submit">
    </form>

    <?php 
        include 'db.php';

        if(isset($_POST['id'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $position = $_POST['position'];
            $salary = $_POST['salary'];

            

            try {
                if ($name) {
                    $schemaStatement = $conn -> prepare("UPDATE  employees SET name = :name WHERE id = $id");
                    $schemaStatement -> bindParam(':name', $name);
                    if ($schemaStatement -> execute()) {
                        echo 'successfully insert';
                    } else {
                        echo 'no insert';
                    }
                } 
                if ($position) {
                    $schemaStatement = $conn -> prepare("UPDATE  employees SET position = :position WHERE id = $id");
                    $schemaStatement -> bindParam(':position', $position);
                    if ($schemaStatement -> execute()) {
                        echo 'successfully insert';
                    } else {
                        echo 'no insert';
                    }
                }
                if ($salary) {
                    $schemaStatement = $conn -> prepare("UPDATE  employees SET salary = :salary WHERE id = $id");
                    $schemaStatement -> bindParam(':salary', $salary);
                    if ($schemaStatement -> execute()) {
                        echo 'successfully insert';
                    } else {
                        echo 'no insert';
                    }
                }
                

            } catch (PDOException $e) {
                echo 'ERROR: '. $e->getMessage();
            }
        }

    ?>
</body>
</html>