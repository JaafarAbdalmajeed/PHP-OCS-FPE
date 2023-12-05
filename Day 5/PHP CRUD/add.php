<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post">
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
                $schemaStatement = $conn -> prepare("INSERT INTO employees (id, name, position, salary) VALUES (:id, :name, :position, :salary)");
                $schemaStatement -> bindParam(':id', $id);
                $schemaStatement -> bindParam(':name', $name);
                $schemaStatement -> bindParam(':position', $position);
                $schemaStatement -> bindParam(':salary', $salary);
                if ($schemaStatement -> execute()) {
                    echo 'successfully insert';
                } else {
                    echo 'no insert';
                }

            } catch (PDOException $e) {
                echo 'ERROR: '. $e->getMessage();
            }
        }

    ?>
</body>
</html>