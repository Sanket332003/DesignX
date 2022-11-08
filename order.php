<?php
    session_start();

    if(! isset($_SESSION['username'])){
        header('location:index.php');
    }
?>

<?php

include "condb.php";

    if(isset($_GET['id'])){
        $customer_id = $_GET['id'];
    }

//         $select_customer = "select *from register where id = $id";
//         $run_customer = mysqli_query($con,$select_customer);
//         $row_customer = mysqli_fetch_array($run_customer);

//         while($row_customer){
//             $cust_id = $row_customer['id'];
//             $cust_username = $row_customer['username'];
//             $cust_email = $row_customer['email'];
//             $cust_address = $row_customer['address'];
//             $cust_pincode = $row_customer['pincode'];
//             $cust_phoneno = $row_customer['phoneno'];

//         }

//     }

    if(isset($_GET['pid'])){
        $product_id = $_GET['pid'];
    }

//         $select_product = "select * from product where id = $product_id";
//         $run_product = mysqli_query($con,$select_product);
//         $row_product = mysqli_fetch_array($run_product);

//         while($row_product){
//             $pro_id = $row_product['id'];
//             $pro_name = $row_product['name'];
//             $pro_description = $row_product['description'];
//             $pro_img = $row_product['img'];
//             $pro_price = $row_product['price'];
//             $pro_color = $row_product['color'];
//             $pro_size = $row_product['size'];

           
//         }
//     }
//     $sql = "insert into order (username,email,address,city,state,zipcode,cardnumber,expmonth,expyear,cvv) values('$username','$email','$address','$city','$state','$zipcode','$cardnumber','$expmonth','$expyear','$cvv')";
// ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="order.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="success.css">
    <title>Confirm Order</title>
    
</head>	
<?php
    include "condb.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $cardnumber = $_POST['cardnumber'];
        $expmonth = $_POST['expmonth'];
        $expyear = $_POST['expyear'];
        $cvv= $_POST['cvv'];

       
       $sql= "INSERT INTO c_order (`c_id`, `p_id`, `id`, `username`, `email`, `city`, `address`, `pincode`, `state`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES ('$customer_id', '$product_id', '$id','$username', '$email', '$address', '$city', '$state','$pincode','$cardnumber', '$expmonth', '$expyear', '$cvv'    )";
        $result = mysqli_query($con,$sql);
        

        if($result){
            alert("Order Confirm");
            header("location:main.php");
        }else{
            echo "User Not Registed !!!";
        }
    }
?>
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
<form method="POST">
<header>
	<div class="container1">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form>
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
				
            <div class="txt_field">
                <input type="text" name="address" required>
                <span></span>
                <label>Address</label>
            </div>	

            <div class="txt_field">
                <input type="text" name="city" required>
                <span></span>
                <label>City</label>
            </div>
        <div id="zip">
            <div class="txt_field">
                  <input type="text" name="state" required>
                 <span></span>
                  <label>State</label>
              </div>
                    
            <div class="txt_field">
                <input type="number" name="pincode" required>
                <span></span>
                <label>Pin Code</label>
             </div>
					
        </div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
		
                <p class="p">Accepted Card </p>	 
				<img src="card1.png" width="100">
				<img src="card2.png" width="50">
				<br>
                <div class="txt_field">
                <input type="text" name="cardnumber" required>
                <span></span>
                <label>Credit Card Number</label>
            </div>
				
            <div class="txt_field">
                <input type="text" name="expmonth" required>
                <span></span>
                <label>Exp Month</label>
            </div>
				<div id="zip">
					<label>
                    <div class="txt_field">
                            <input type="number" name="expyear" required>
                            <span></span>
                            <label>Exp Year</label>
                         </div>
					</label>
						<label>
						<div class="txt_field">
                            <input type="number" name="cvv" required>
                            <span></span>
                            <label>CVV</label>
                         </div>
					</label>
				</div>
			</form>
            
            
          
            

            <script>
            function myFunction() {
              alert("Order Confirm");
            }
            </script>
            
              <?php
        
            echo "<button><a href='main.php?id=$id' name='submit'>Confirm Order</a></button>";
           echo "<button><a href='main.php?id=$id'>Cancle</a></button>";
            ?>
			 <!-- <input type="submit" name="" value="Confirm Order">
            <input type="submit" name="" value="Cancle"> success.php?id=$id' -->
		</div>
	</div>
</header>
        </form>
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