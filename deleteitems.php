<?php
    include "condb.php";
    $id = $_GET['id'];
    $sql = "delete from product where id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location:additems.php");
    }
    else{
        echo "not deleted!";
    }
?>