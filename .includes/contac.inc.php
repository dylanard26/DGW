<?php
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordrepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordrepeat)) {
        header("Location: ../contact.php?error=emptyfields&uid=".$username. "&mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) &&!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../contact.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../contact.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../contact.php?error=invaliduid&email=".$email);
        exit();
    }
    else {

        $sql="SELECT uidUsers FROM contacts WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../contact.php?error=sqlerror");
            exit();
        }
            else {

                $sql = "INSERT INTO contacts (uidUsers, emailUsers, msgUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../contact.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPwd = $password;

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../contact.php?signup=success");
                    exit();  
                }
            }
        }
    mysqli_stmt_close($stmt);
    mysqli_close($comm);
}
else {
    header("Location: ../contact.php" );
    exit();  
}