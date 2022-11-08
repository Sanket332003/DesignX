<?php
    include "condb.php";
    
    $id = $_GET['id'];
    $sql = "select *from product where id = $id";
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
    include "condb.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $description= $_POST['description'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $sql = "update product set name='$name',description='$description',img='$img',price='$price',color='$color',size='$size' where id = $id";
        $result = mysqli_query($con,$sql);

        if($result){
            header("location:additems.php?id=$id");
        }else{
            echo "Items not edited !!!";
        }
    }
?>
<body>

    <section class="updatesection"></section>

    <div class="center" style="">
        <h1>Edit Items</h1>
        <form method="POST">
            <div class="txt_field">
                <input type="text" name="name"  value="<?php echo $row['name']; ?>" required>
                <span></span>
                <label>ProductName</label>
            </div>
            <div class="txt_field">
                <input type="text" name="description" value="<?php echo $row['description']; ?>" required>
                <span></span>
                <label>ProductDescription</label>
            </div>
            <div class="txt_field">
            <input type="file" name="img" id="fileToUpload" value="<?php echo $row['img']; ?>"required>
                <span></span>
                <label>ProductImage</label>
            </div>
            <div class="txt_field">
                <input type="number" name="price" value="<?php echo $row['price']; ?>" required>
                <span></span>
                <label>ProductPrice</label>
            </div>
            <div class="txt_field">
                <input type="text" name="color"  value="<?php echo $row['color']; ?>"required>
                <span></span>
                <label>ProductColors</label>
            </div>
            <div class="txt_field">
                <input type="text" name="size" value="<?php echo $row['size']; ?>" required>
                <span></span>
                <label>ProductSizes</label>
            </div>
            <input type="submit" class="submit" name="submit" value="Update">
           
        </form>
    </div>
</body>
</html>