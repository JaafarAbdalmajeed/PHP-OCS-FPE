<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="welcome">
        <h1><strong>Hello There</strong></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, error nam laborum blanditiis ipsam illo sapiente excepturi fugiat nemo? Provident.</p>
        <form action="index.php" method="post">
            <div class="inputDiv">
                <label for="fullName">Full Name</label>
                <input type="text" name="fullName" id="fullName">
            </div>

            <div class="inputDiv">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="inputDiv">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile">
            </div>

            <div class="inputDiv">
                <label for="Password">Password</label>
                <input type="text" name="Password" id="Password">
            </div>
            <div class="inputDiv">
                <label for="passwordConfirmation">Password Confirmation</label>
                <input type="text" name="passwordConfirmation" id="passwordConfirmation">
            </div>

            <div class="inputDiv">
                <label for="dateBirth">Date of Birth</label>
                <input type="text" name="dateBirth" id="dateBirth">
            </div>

            <div class="btn">
                <input type="submit" value="Sign Up" class="a">
            </div>
        </form>

        <div class="btnSingIn">Do have an account?<a href="../Sing up/index.php">Sign In</a></div>
    </main>
    
</body>
</html>

<?php 
    include '../config/db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['Password'];
        $passwordConfirmation = $_POST['passwordConfirmation'];
        $dateOfBirth = $_POST['dateBirth']; 

        if (!preg_match('/^[A-Za-z\s]+$/', $fullName)) {
            $msg = 'invalid fullName';
            msgError($msg);
        }

        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateOfBirth)) {
            $msg = 'invalid dateOfBirth';
            msgError($msg);
        }

        if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $mobile)) {
            $msg = 'invalid mobile';
            msgError($msg);
        }

        if (!preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $email)) {
            $msg = 'invalid email';
            msgError($msg);
        }

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
            $msg = 'invalid password';
            msgError($msg);
        }
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $passwordConfirmation)) {
            $msg = 'invalid passwordConfirmation';
            msgError($msg);
        }
        try {
            $sql = $conn->prepare("INSERT INTO users (fullName, email, mobile, Password, dateBirth, role) VALUES (:fullName, :email, :mobile, :Password, :dateBirth, :role)");
            $sql->bindParam(":fullName", $fullName);
            $sql->bindParam(":email", $email);
            $sql->bindParam(":mobile", $mobile);
            $sql->bindParam(":Password", $password);
            $sql->bindParam(":dateBirth", $dateOfBirth); 
            $sql->bindParam(":role", 0); 
            $sql->execute();
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
?>