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
	<title>WHALES - Home</title>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="main.css/index.css">
</head>
<body style="padding: 0px; margin: 0px;">
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
	</script>
	<button class='backtotop' onclick="topFunction()" title="Go to top">⇫⇫</button>
	<div class="menu">
		<div class="toggle">
			<i class="fas fa-bars" onclick="showMenu()"></i>
		</div>
		<div class="menu-title">WHALES</div>
		<div class="menu-item" >
			<a href="index.php">HOME</a>
		</div>
		<div class="menu-item" >
			<a href="product.php">PRODUCTS</a>
		</div>
		<!-- <div class="menu-item_product">
			
			<div class="submenu-item_product"><a href="jacket.html">JACKETS</a> </div>
			<div class="submenu-item_product"><a href="shorts.html">SHORTS</a> </div>
			<div class="submenu-item_product"><a href="shoes.html">SHOES</a> </div>
			<div class="submenu-item_product"><a href="pants.html">PANTS</a> </div>
			<div class="submenu-item_product"><a href="sweater.html">SWEATER</a> </div> 
		</div> -->
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
	<!-- <div class="login">
		<button class="loginbt">
			<a href="login.html" class="link_toP">Log in</a>
		</button>
	</div> -->
	<div class="manage_pd">
		<button class="mnpd_bt">
			<a href="manage_pd.php" class="link_toP">Manage Products</a>
		</button>
	</div>
	<div class="cart">
		<a href="cart.html"><img src="images/cart.png" width="40px"></a>
	</div>
	<div class="content">
		<div class="top">
			<img class = 'top_img' src="./images/picturetotal.jpg" alt="">
			<!-- <div class="top-button">
				<a href="allcollection.html" class="top-button__content">
					Go to Collection
				</a>
			</div> -->
		</div>
		<div class="mid">
			<img class = 'mid_img' src="./images/1.jpg" alt="">
			<img class = 'mid_img' src="./images/2.jpg" alt="">
			<img class = 'mid_img' src="./images/3.jpg" alt="">
		</div>
		<div class="bot">
			<img class = 'bot_img' src="./images/4.jpg" alt="">
			<img class = 'bot_img' src="./images/5.jpg" alt="">
		</div>
	</div>
	<footer>
	<div class = "footer">
		<div class = "footer-left">
			<div class='footer-left1'>GENERAL POLICY</div>
			<div class="footer-left1">PRIVACY POLICY</div>
			<div class='footer-left1'> 
				<a href="http://online.gov.vn/Home/WebDetails/53061"><img src="images/trans_bo-cong-thuong.png"></a>
			</div>
		</div>
		<div class = "footer-right">
			<div class="footer-right2">
				WHALES VIETNAM TRADING COMPANY LIMITED</br>
				Representative: RSP</br></br>
				Store: 160/63 A-B, Phan Huy Ich, Phuong 12, Quan Go Vap, Ho Chi Minh</br>
				Hotline: 0369874557</br>
				Email: 197CT01LHS@vanlanguni.vn</br>
			</div>
			<div class="footer-right__icon">
				<div class="footer-right__icon__img"><a href="https://www.lazada.vn/"><img src="images/IconLazada.png" class="img"> </a> </div>
				<div class="footer-right__icon__img"><a href="https://shopee.vn/mikenco.official"><img src="images/iconShopee.png"class="img"></a></div>
				<div class="footer-right__icon__img"><a href="https://tiki.vn/cua-hang/la-dolce-vita?"><img src="images/iconTiki.png"class="img"></a></div>
				<div class="footer-right__icon__img"><a href="https://www.tiktok.com/?is_copy_url=1&is_from_webapp=v1"><img src="images/iconTikTok.png"class="img"></a></div>
				<div class="footer-right__icon__img"><a href="https://www.youtube.com/channel/UCqBiGybwHlURMwlVByCMwtQ"><img src="images/iconYoutube.png"class="img"></a></div>
				<div class="footer-right__icon__img"><a href="https://www.facebook.com/maisonmikenco"><img src="images/iconFb.png"class="img"></a></div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>