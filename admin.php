<?php
    session_start();
    
    if(! isset($_SESSION['username'])){
        header('location:index.php');
    }
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>DesignX</title>
</head>
<?php
        include "condb.php";

        $sql = "select *from product";
        $result = mysqli_query($con,$sql);
?>
<body>
    <nav>
        <label class="logo">DesignX</label>
        <ul class="ul">
        <?php
             $id =  $_GET['id'];
            echo "<li><a href='admin.php?id=$id'>Home</a></li>";
            echo "<li><a href='additems.php?id=$id'>Add items</a></li>";
            echo "<li><a href='alluser.php?id=$id'>All Users</a></li>";
           echo "<li><a href='admindetail.php?id=$id'><i class='fas fa-user' id='user'></i></a></li>"; ?>
        </ul>
    </nav>
    <div class="useremail">
     <?php echo "Welcome   ".$_SESSION['username'] ?>
    </div>
    <?php
    while($row = mysqli_fetch_array($result)){
    echo"<div class='card'>";
        echo"<div class='card-header'>";
           
                echo " <h3>{$row['name']}</h3>";
                echo "<p>{$row['description']}</p>";
                echo " <span>New</span>";
                echo "</div>";

              echo  "<div class='card-img'>"; 
                echo "<img src='{$row['img']}' alt='....'>";
                echo "<i class='bx bx-heart'></i>";
            echo"</div>";

         echo"   <div class='card-details'>";
           echo" <div calss='price'>";
                echo"<p>Price</p>";
                echo"<strong> ₹ {$row['price']}</strong>";
           echo" </div>";
            echo"<div class='colors'>";
                echo"<div>";
                    echo"<i class='bx bx-check'></i>";
              echo"  </div>";
                echo"<div>";
                    echo"<i class='bx bx-check'></i>";
                echo"</div>";
                echo"<div>";
                    echo"<i class='bx bx-check'></i>";
                echo"</div>";
            echo"</div>";
        echo"</div>";

       echo" <div class='card-size'>";
        echo"<span class='selected'>7</span>";
        echo"<span>8</span>";
        echo"<span>9</span>";
        echo"<span>10</span>";
        echo"<span>11</span>";
        echo"<span>12</span>";
    echo"</div>";
           
      
      echo"  <div class='card-footer'>";
            echo"<button>Buy Now</button>";
        echo"</div>";
    echo"</div> ";
}
?>
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