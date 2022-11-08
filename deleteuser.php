<?php
    include "condb.php";
    $id = $_GET['id'];
    $sql = "delete from register where id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location:alluser.php");
    }
    else{
        echo "not deleted!";
    }
?>