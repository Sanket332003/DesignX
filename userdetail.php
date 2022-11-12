<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Profile </title>
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"rel="stylesheet"/>
    <link rel="stylesheet" href="contact.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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

    <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
           DesignX  DesignX  DesignX  DesignX  DesignX  DesignX  DesignX  DesignX  DesignX  
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>PROFILE</span>
            <span>DETAIL</span>
          </div>
          <div class="app-contact">DesignX Shooes</div>
        </div>
<?php
  include "condb.php";
  $id = $_GET['id'];
  $sql = "select *from register where id=$id";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  

?>

        <div class="screen-body-item">
          <div class="app-form">
          <div class="app-form-group">
              <h4 class="app-form-control">USER TYPE : <?php echo$row['usertype']; ?> </h4>
            </div>
            <div class="app-form-group">
              <h4 class="app-form-control">NAME : <?php echo$row['username']; ?> </h4>
            </div>
            <div class="app-form-group">
            <h6 class="app-form-control">EMAIL : <?php echo$row['email']; ?> </h6>
            </div>
            <div class="app-form-group">
            <h4 class="app-form-control">PHONE NO : <?php echo$row['phoneno']; ?> </h4>
            </div>
            <div class="app-form-group message">
            <h5 class="app-form-control">ADDRESS : <?php echo$row['address']; ?> </h5>
            </div>
            <div class="app-form-group message">
            <h4 class="app-form-control">PINCODE : <?php echo$row['pincode']; ?> </h4>
            </div>
            <div class="app-form-group message">
            <h4 class="app-form-control">PASSWORD : <?php echo$row['password']; ?> </h4>
            </div>
          
            <div class="app-form-group buttons">
              <button class="app-form-button"><a href="logout.php">LOGOUT</a></button>
              
            </div>
          </div>
          </div>
        </div>
      </div>
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


