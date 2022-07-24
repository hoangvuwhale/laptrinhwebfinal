<?php
    require("ketNoiDatabase.php");
    $sql = "SELECT * FROM `products`";
    $query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css/manage_pd.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,400&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Manage Products</title>
    <script>
    function delete_sp(){
        var conf = confirm(`bạn có chắc chắn xóa sản phẩm hay không ?`);
        return conf;
    }
    </script>
    <script src="https://kit.fontawesome.com/7ea43701ef.js" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <button class="back-bt button is-success"><a href="index.php" class="link_toP">Go back</a></button>
    </div>
    <div class= "container">
        <div class="box">
            <div class="title">
                <h1>Manage Your Products</h1>
            </div>
            <button class="button is-success is-outlined">
                <a href="add_pd.php" class="link_toP">Add New Products</a>
            </button><br>
        
        <table id="productList" class="table is-hoverable">
        <tr class="table">
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Gía sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Description</th>
            <th>Hành động</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $row["product_id"] ?></td>
            <td><?= $row["product_name"] ?></td>
            <td><?= $row["product_price"] ?>&nbsp; VNĐ</td>
            <td><img style="width: 200px;height:200px" src='./images/<?= $row["product_image"] ?>' alt=""></td>
            <td><?= $row["product_descript"] ?></td>
            <td>
                <button class="button is-warning is-fullwidth marg">
                <a href="edit_pd.php?id=<?= $row['product_id']?>">Edit</a>
                <span class="icon is-small">
                    <i class="fa-solid fa-pencil"></i>
                </span>
            </button><br>
            <button class="button is-danger is-outlined is-fullwidth marg">
                <a onclick="return delete_sp()" href="delete_pd.php?id=<?= $row['product_image']?>">Delete</a>  
                <span class="icon is-small">
                <i class="fas fa-times"></i>
                </span>
            </button>
                
            </td>
        </tr>
        <?php }?>
    </table>
    </div>
    </div>
</body>
</html>