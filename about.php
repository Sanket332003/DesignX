<?php
    session_start();

    if(! isset($_SESSION['username'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>About Us</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
    
</head>	
<body>
<nav>
        <label class="logo">DesignX</label>
        <ul class="ul">
		<?php
             $id =  $_GET['id'];
            echo "<li><a href='main.php?id=$id'>Home</a></li>";
            echo "<li><a href='about.php?id=$id'>about</a></li>";
            echo "<li><a href='service.php?id=$id'>service</a></li>";
            echo "<li><a href='contact.php?id=$id'>Contact</a></li>";
           echo "<li><a href='userdetail.php?id=$id'><i class='fas fa-user' id='user'></i></a></li>"; ?>
        </ul>
    </nav>
   
	<div class="section">
		<div class="container">
        <div class="useremail">
     <?php echo "Welcome   ".$_SESSION['username'] ?>
    </div>
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>DesignX Shooes Is the Best Shooes Ever.</h3>
					<p>A shoe is an item of footwear intended to protect and comfort the human foot. They are often worn with a sock. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture, with form originally being tied to function.</p>
					<div class="button1">
						<a href="">Read More</a>
					</div>
				</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="img one.jpg">
			</div>
		</div>
	</div>
	<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>DesignX</h4>
                <ul>
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