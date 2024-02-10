<?php
    include 'database.php';
    $id=$_GET['id'];

    $sql="DELETE FROM tasks WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>