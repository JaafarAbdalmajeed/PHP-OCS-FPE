<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for=""></label>
        <input type="text" name="id" id="id" placeholder="enter id">

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

        if($_SERVER["REQUEST_METHOD"] == 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $position = $_POST['position'];
            $salary = $_POST['salary'];

            

            try {
                if ($id) {
                    $schemaStatement = $conn -> prepare("UPDATE  employees SET id = :id");
                    $schemaStatement -> bindParam(':id', $id);
                    if ($schemaStatement -> execute()) {
                        echo 'successfully insert';
                    } else {
                        echo 'no insert';
                    }
                }
                if ($name) {
                    $schemaStatement = $conn -> prepare("UPDATE  employees SET name = :name");
                    $schemaStatement -> bindParam(':name', $name);
                    if ($schemaStatement -> execute()) {
                        echo 'successfully insert';
                    } else {
                        echo 'no insert';
                    }
                } 
                if ($position) {
                    $schemaStatement = $conn -> prepare("UPDATE  employees SET position = :position");
                    $schemaStatement -> bindParam(':position', $position);
                    if ($schemaStatement -> execute()) {
                        echo 'successfully insert';
                    } else {
                        echo 'no insert';
                    }
                }
                if ($salary) {
                    $schemaStatement = $conn -> prepare("UPDATE  employees SET salary = :salary");
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