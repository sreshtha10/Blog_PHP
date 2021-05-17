<?php

if(isset($_POST['signup'])){
    require 'database.php';
    require 'header.php';
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];

    if(empty($name) || empty($password) || empty($confirmPassword) || empty($email)){
        header("Location: ../index.php?error=emptyfields&username=");
        exit();
    }
    else if($password !== $confirmPassword){
        header("Location: ../index.php?error=passwords_do_not_match");
        exit();
    }
    else{
        $sql = "SELECT name FROM users WHERE name = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=SqlError");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
            if($rowCount > 0){
                header("Location: ../index.php?error=usernameTaken");
                exit();
                
            }
            else{
                $sql = "INSERT INTO users (name,password,email) VALUES (?,?,?) ";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../index.php?error=SqlError");
                    exit();
                }
                else{
                    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sss",$name,$hashedPassword,$email);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?success=Registered");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}










?>