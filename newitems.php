
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
    include "condb.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $description= $_POST['description'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $size = $_POST['size'];

        $sql = "insert into product (name,description,img,price,color,size) values('$name','$description','$img','$price','$color','$size')";
        $result = mysqli_query($con,$sql);

        if($result){
            header("location:additems.php");
        }else{
            echo "Items not Inserted !!!";
        }
    }
?>
<body>
    <section class="updatesection"></section>

    <div class="center" >
        <h1>Add Items</h1>
        <form method="POST">
            <div class="txt_field">
                <input type="text" name="name" required>
                <span></span>
                <label>ProductName</label>
            </div>
            <div class="txt_field">
                <input type="text" name="description"  required>
                <span></span>
                <label>ProductDescription</label>
            </div>
            <div class="txt_field">
            <input type="file" name="img" id="fileToUpload" required>
                <span></span>
                <label></label>
            </div>
            <div class="txt_field">
                <input type="number" name="price" required>
                <span></span>
                <label>ProductPrice</label>
            </div>
            <div class="txt_field">
                <input type="text" name="color"required>
                <span></span>
                <label>ProductColors</label>
            </div>
            <div class="txt_field">
                <input type="text" name="size"  required>
                <span></span>
                <label>ProductSizes</label>
            </div>
            <input type="submit" class="submit" name="submit" value="Insert">
           
        </form>
    </div>
</body>
</html>