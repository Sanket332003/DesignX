<?php
    session_start();
    
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>DesignX</title>
</head>
<?php
    include "condb.php";

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select *from register where email='$email' AND password='$password'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
         
       
        
         
            if ($row['usertype']=='admin') {
                $_SESSION['username']= $email;
                header("location:admin.php?id=$row[0]");

            }elseif($row['usertype']=='user'){
                $_SESSION['username']= $email;
                header("location:main.php?id=$row[0]");
            }else{
               echo"User Not Found !!";
            }
       
    }
?>
<body>
    <nav>
        <label class="logo">DesignX</label>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FeedBack</a></li>
        </ul>
    </nav>
    <section id="section"></section>

    <div class="center">
        <h1>Login</h1>
        <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <!-- <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>UserName</label>
            </div> -->
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>EmailId</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" class="submit" name="submit" value="Login">
            <div class="login_link">
                Not a Member? <a href="registration.php" class="login">Register</a> here.
            </div>
        </form>
    </div>
    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>DesignX</h4>
                <ul class="ul">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get Help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Online Shop</h4>
                <ul>
                    <li><a href="#">Lofer Shoes</a></li>
                    <li><a href="#">Formal Shoes</a></li>
                    <li><a href="#">Party Shoes</a></li>
                    <li><a href="#">Sports Shoes</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-link">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                   
                </div>
            </div>
        </div>
       
    </div>
    <p class="footer-last">© 2022 DesignX All rights reserved.</p>
</footer>
</body>
</html>