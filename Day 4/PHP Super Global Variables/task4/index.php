<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskText = $_POST['task'];
    if (!empty($taskText)) {
        $_SESSION['tasks'][] = $taskText;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>

</head>
<body>

    <div>
        <h2>To-Do List</h2>
        <form method="post">
            <input type="text" name="task" placeholder="Add a new task">
            <button type="submit">Add</button>
        </form>

        <ul>
            <?php
            foreach ($_SESSION['tasks'] as $task) {
                echo '<li>' . $task . '</li>';
            }
            ?>
        </ul>
    </div>
</body>
</html>