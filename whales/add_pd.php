<?php 
        require("ketNoiDatabase.php");
        if(isset($_POST["submit"]) ){
        $tensp = $_POST["name"];
        $gia = $_POST["price"];
        $mota = $_POST["des"];
        $hinhanh=$_FILES['image']['name'];
        // tạo thư mục  => note , tạo thư mục images ở bên ngoài trước nhé
        $target_dir = "./images/";
        // tạo dường dẫn đến file
        $target_file = $target_dir.$hinhanh ;
        
        // check đủ các trường thông tin
        if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
            move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
            $sql = "INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_descript`, `product_image`)
            VALUES(NULL,'$tensp','$gia' ,'$mota','$hinhanh')";
            mysqli_query($conn, $sql);
            echo "<script>alert('You have added new product!')</script>";
            header("Location:manage_pd.php");
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css/add_pd.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,400&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Add Products</title>
</head>
<body>
    
    <div>
        <button class="back-bt">
            <a href="index.php" class="link_toP">Home</a>
        </button>
        <button class="back-bt">
            <a href="manage_pd.php" class="link_toP">Go back</a>
        </button>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="title">
            <h1>Add New Product</h1>
        </div>

            <label for="name">Product's name:</label><br>
            <input type="text" id='name' name="name" placeholder="Enter Product Name" class="input"><br>

            <label for="price">Price:</label><br>
            <input type="number" id='price' name="price" placeholder="Enter Product Price" class="input"><br>

            <label for="file">Image</label><br>
            <input type="file"  id="file" name="image" value="Choose File" class="input"><br>

            <label for="mota">Description:</label><br>
            <textarea name="des" id='des'  cols="30" rows="10" placeholder="How would you descripe your product.." class="input"></textarea><br>
        </div>
        <button type="submit" name="submit" class="add-bt">
        Add Product!
        </button>   
    </form>
</body>
</html>