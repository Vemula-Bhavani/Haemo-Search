<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con = new mysqli("localhost","root","","bloodbanks");
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    }
    else {
        $stmt = $con->prepare("select * from signin where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                header('location: db.html');
            }
            else {
                header("Location: logging.php?error=Invalid password. Please try again.");
                exit();
            }
        }
        else {
            header("Location: logging.php?error=Invalid username. Please try again.");
        exit();
        }
    }
?>