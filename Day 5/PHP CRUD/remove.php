<?php 
    
    if(isset($_POST['id'])){
        include 'db.php';

        try {
            $id = $_POST['id'];
            $sql = 'DELETE FROM employees WHERE id = :id';
            $statement = $pdo->prepare($sql);
            if($statement->bindParam(':id', $id)){
                echo 'success delete';
            }
            

        } catch (PDOException $e) {
            echo 'ERROR: '. $e->getMessage(); 
        }
    }
?>