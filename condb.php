<?php
    $hostname = "remotemysql.com";
    $user = "41IoEozd6w";
    $password = "oYZLjHobrd";
    $database = "41IoEozd6w";

    $con = mysqli_connect($hostname,$user,$password,$database);

    if($con){
        echo "";
    }else{
            echo "Databse Not Connected !!!";
        }
?>