<?php
       $id=$_POST['id'];
       $title=$_POST['title'];
       $description=$_POST['description'];
       
    include 'database.php';
    $sql="UPDATE tasks SET title='$title',description='$description' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>