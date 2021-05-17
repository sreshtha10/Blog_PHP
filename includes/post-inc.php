<?php
    session_start();
    if(isset($_POST['post'])){
        require 'database.php';
        $title = $_POST['title'];
        $article = $_POST['textarea1'];
        $id = $_SESSION['id'];
        

        if(empty($title) || empty($article)){
            header("Location: ../write.php?error=empty_fields");
            exit();
        }
        else{
            $sql = "INSERT INTO blogs (title,article,id) VALUES (?,?,?) ";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../write.php?error=SqlError");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"ssi",$title,$article,$id);
                mysqli_stmt_execute($stmt);
                header("Location: ../blog.php?success=posted.");
                exit();
            }
        }

    }

?>