<?php
$title=$_POST['title'];
$description=$_POST['description'];
$id=$_POST['id'];




include 'database.php';
$sql="INSERT INTO tasks(title,description,id_user)VALUES('$title','$description','$id')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>