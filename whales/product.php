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
	<title>Products</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,400&family=Raleway:wght@300&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->
	<link rel="stylesheet" href="main.css/product.css">
		

</head>
<body style="padding: 0px;margin: 0px;">
	<div class="snowflakes" aria-hidden="true">
		<div class="snowflake">❅</div>
		<div class="snowflake">❅</div>
		<div class="snowflake">❆</div>
		<div class="snowflake">❄</div>
		<div class="snowflake">❅</div>
		<div class="snowflake">❆</div>
		<div class="snowflake">❄</div>
		<div class="snowflake">❅</div>
		<div class="snowflake">❆</div>
		<div class="snowflake">❄</div>
	</div>
	<script src="main.js/backtotop.js"></script>
	<button class='backtotop' onclick="topFunction()" title="Go to top">⇫⇫</button>
	<div>
		<div class="menu-letf">
			<div class="menu">
				<div class="menu-title">WHALES</div>
				<div class="menu-item">
					<a href="index.php">HOME</a>
				</div>
				<div class="menu-item_product">
					<div class="submenu-title_product">PRODUCTS</div>
				</div>
				<div class="menu-item">
					<a href="warranty.html">WARRANTY</a>
				</div>
				<div class="menu-item">
					<a href="member.html">MEMBER</a>
				</div>
				<div class="menu-item">
					<a href="stores.html">STORES</a>
				</div>
			</div>

		</div>
		<div class="cart">
			<a href="cart.html"><img src="images/cart.png" width="40px"></a>
		</div>
		<div class="content-right">
			<div class="content-right-title">Our Products</div>
			<input type="text" class="input" onkeyup="myFunction()" placeholder="Tìm kiếm sản phẩm.." title="Type in a name">


			<div class="columns">
				<div class= "column">
					<div class= "box product">
					<?php 
						while($row = mysqli_fetch_array($query)){
					?>
						<div class="product-item-top container">
							<a href="" class="product-thumb">
								<img src='./images/<?= $row["product_image"] ?>' alt="" class="image"><br>
							</a>
							<div class="overlay">
								<div class="text">
									<button class="bt"><a href="">Buy now</a></button>
								</div>
							</div>
						<div class="product-info">
								<a href="" class="product-cat">
									Jacket
								</a>
								<a href="" class="product-name">
									<?= $row["product_name"] ?><br>
								</a>
						
						<div class="product-price">
								<?= $row["product_price"] ?>&nbsp; VNĐ<br>
						</div>
						</div>
						</div>
					<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</body>
</html>