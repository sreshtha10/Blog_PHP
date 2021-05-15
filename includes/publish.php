<?php

require 'database.php';
function getPublished(){
    global $conn;
    $sql = 'SELECT * FROM users INNER JOIN blogs ON users.id = blogs.id';
    $result = mysqli_query($conn,$sql);
    $post = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $post;
}
