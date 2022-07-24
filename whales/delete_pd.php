<?php 
    require('./ketNoiDatabase.php');
    $id = (int) $_GET['id'];
    $image = "SELECT product_image  FROM `products` WHERE `products`.`product_id` = $id";
    $query = mysqli_query($conn, $image);
    $after = mysqli_fetch_assoc($query);
   
    // DELETE file img
    if (file_exists("./images/".$after['product_image'])) {
        unlink("./images/".$after['product_image']);

    }
    $sql = "DELETE FROM `products` WHERE `products`.`product_id` = $id";
    mysqli_query($conn, $sql);
    header("location:manage_pd.php");
?>