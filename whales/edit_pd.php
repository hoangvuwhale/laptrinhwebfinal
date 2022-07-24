<?php 
    require("ketNoiDatabase.php");
    $masp =(int) $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE `product_id` = '$masp'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $img = $row['product_image'];
    if(isset($_POST['submit'])){
        $gia =  $_POST['price'];
        $tensp =  $_POST['name'];
        $mota =  $_POST['des'];
        $hinhanh=$_FILES['image']['name'];
        $target_dir = "./images/";
        if($hinhanh){
            if (file_exists("./images/".$img)) {
                unlink("./images/".$img);
            } 
            $target_file = $target_dir.$hinhanh ;
        }else{
            $target_file = $target_dir.$img ;
            $hinhanh = $img;
        }
        if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
            $sql = "UPDATE `products` SET `product_name` =  '$tensp', `product_price` =  '$gia', 
             `product_descript` = '$mota', `product_image` = '$hinhanh'
            WHERE `products`.`product_id` = '$masp';";
            mysqli_query($conn, $sql);
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
    <title>Edit Info</title>
    <link rel="stylesheet" href="main.css/edit_pd.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,400&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div>
        <button class="back-bt button is-success">
            <a href="index.php" class="link_toP">Home</a>
        </button>
        <button class="back-bt button is-success">
            <a href="manage_pd.php" class="link_toP">Go back</a>
        </button>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="title">
            <h1>Edit Product</h1>
        </div>
        <label for="name">Product's name:</label><br>
            <input type="text" id='name' name="name" placeholder="Enter Product Name" value="<?= $row["product_name"]?>" class="input" ><br>

            <label for="price">Price:</label><br>
            <input type="number" id='price' name="price" placeholder="Enter Product Price" value="<?= $row["product_price"]?>" class="input"><br>

            <label for="file">Image</label><br>
            <input type="file"  id="file" name="image" value="Choose File" src='./images/<?= $row["product_image"]?>' alt="" class="input"><br>

            <label for="mota">Description:</label><br>
            <textarea name="des" id='des'  cols="30" rows="10" placeholder="How would you descripe your product.."  class="input"><?= $row["product_descript"]?></textarea><br>
        </div>
        <button type="submit" name="submit" class="add-bt">
        Update Product Info
        </button>
    </form>
</body>
</html>
