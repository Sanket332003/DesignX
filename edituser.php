<?php
        include "condb.php";

        $id = $_GET['id'];
        $sql = "select *from register where id = $id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>DesignX</title>
</head>
<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "update register set username='$username',email='$email',password='$password' where id='$id'"; 
        $result = mysqli_query($con,$sql);

        if($result){
            header("location:alluser.php");
        }else{
            echo "User Not Edited !!!";
        }
    }
?>
<body>
    
    <section class="editsection"></section>

    <div class="center">
        <h1>User</h1>
        <form method="POST">
            <div class="txt_field">
                <input type="text" name="username"  value="<?php echo $row['username']; ?>"required>
                <span></span>
                <label>UserName</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email"  value="<?php echo $row['email']; ?>"required>
                <span></span>
                <label>EmailId</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" value="<?php echo $row['password']; ?>" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" class="submit" name="submit" value="Update">
           
        </form>
    </div>
</body>
</html>