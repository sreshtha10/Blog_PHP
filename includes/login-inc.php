<?php

if(isset($_POST['signin'])){
    require 'database.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE email = ? ;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $passCheck = password_verify($password,$row['password']);
                if($passCheck == false){
                    header("Location: ../index.php?error=wrongpass");
                    exit();
                }
                else if($passCheck == true){
                    // logged in.
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['loggedin'] = true;
                    header("Location: ../blog.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../index.php?error=wrongpass");
                    exit();
                }

            }
            else{
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
}   



?>