<?php

//require 'functions.php'
 //$kategori = query("SELECT * FROM kategori")

//tombol cari ditekan
//if( isset($_POST["cari"])) {
	//$kategori = cari($POST["keyword"]);
 //}
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ABAGBAG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
			<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">ABAGBAG</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Beranda</a></li>
								<li><a href="pembayaran.php">Pembayaran</a></li>
								<li><a href="contact.php">Hubungi Kami</a></li>
								<li><a href="keranjang.php"><i class="icon-shopping-cart"></i> Keranjang</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Produk</h1>
				   					<h2 class="bread"><span><a href="index.html">Beranda</a></span> <span>Produk</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
				  </ul>
				  
			  </div>
		</aside>
		

		

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>PERALATAN BAYI</span></h2>
						<p>Kategori peralatan bayi berisi keperluan bayi mulai dari pakaian, gendongan, dan  kereta dorong dengan harga terjamin, namun barang berkualitas.</p>
					</div>
				</div>
				<div class="pencarian">
				<div class="col-md-6 col-md-offset-6 col-sm-2 col-xs-2 slider-text" >
			  		<form action="" method="get" class="navbar-form navbar-right">
						<input type="text" class="form">
						<button class="btn btn-primary">Cari</button>
					</form>
			  </div>
		</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/tasbayi.jpg);">
								<p class="tag"><span class="sale">Diskon</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Tas Bayi</a></h3>
								<p class="price"><span>Rp 55.000</span> <span class="sale">Rp 285.000</span> </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/bayi003.jpg);">
								<p class="tag"><span class="new">Diskon</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Bayi1</a></h3>
								<p class="price"><span>Rp 64.000</span> <span class="sale">Rp 195.000</span> </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/bayi002.jpg);">
								<p class="tag"><span class="new">Diskon</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Bayi2</a></h3>
								<p class="price"><span>Rp 100.000</span> <span class="sale">Rp 185.000</span> </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/tasbayi.jpg);">
								<p class="tag"><span class="new">Diskon</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">tas</a></h3>
								<p class="price"><span>Rp 189.000</span> <span class="sale">Rp 563.000</span> </p>
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/topibayi1.jpeg);">
								<p class="tag"><span class="new">Diskon</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Topi Bayi</a></h3>
								<p class="price"><span>Rp 35.000</span> <span class="sale">Rp 126.000</span> </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/sepatubayi.jpg);">
								<p class="tag"><span class="new">Diskon</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Sepatu Bayi</a></h3>
								<p class="price"><span>Rp 35.000</span> <span class="sale">Rp 126.000</span> </p>
							</div>
						</div>
				</div>
				<div class="col-md-3 text-center">
					<div class="product-entry">
						<div class="product-img" style="background-image: url(images/sepatubayi4.jpg);">
							<p class="tag"><span class="new">Diskon</span></p>
							<div class="cart">
								<p>
									<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
									<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
									<span><a href="#"><i class="icon-heart3"></i></a></span>
									<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="shop.html">Sepatu Bayi</a></h3>
							<p class="price"><span>Rp 35.000</span> <span class="sale">Rp 126.000</span> </p>
						</div>
					</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="product-entry">
					<div class="product-img" style="background-image: url(images/topibayi.jpg);">
						<p class="tag"><span class="new">Diskon</span></p>
						<div class="cart">
							<p>
								<span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
								<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
								<span><a href="#"><i class="icon-heart3"></i></a></span>
								<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
							</p>
						</div>
					</div>
					<div class="desc">
						<h3><a href="shop.html">Topi Bayi</a></h3>
						<p class="price"><span>Rp 35.000</span> <span class="sale">Rp 126.000</span> </p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="pagination">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="colorlib-subscribe">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-6 text-center">
						<h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
					</div>
					<div class="col-md-6">
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

						<footer id="colorlib-footer" role="contentinfo">
								<div class="container">
									<div class="row row-pb-md">
										<div class="col-md-5 colorlib-widget">
											<h4>Tentang Kami</h4>
											<p>Toko online terlengkap dan termurah dengan harga promo setiap harinya.
												Tidak hanya produk fashion saja, kami juga menyediakan perlengkapan bayi, mainan anak dan peralatan rumah tangga.
											</p>
											<p>
												<ul class="colorlib-social-icons">
													<li><a href="#"><i class="icon-twitter"></i></a></li>
													<li><a href="#"><i class="icon-facebook"></i></a></li>
													<li><a href="#"><i class="icon-linkedin"></i></a></li>
													<li><a href="#"><i class="icon-dribbble"></i></a></li>
												</ul>
											</p>
										</div>
					
					
										<div class="col-md-6">
											<h4>Kontak Kami</h4>
											<ul class="colorlib-footer-links">
												<li>Jl. S.Parman No.42 Jember 68121, <br> </li>
												<li><a href="tel://1234567920">(0331) 330900</a></li>
												<li><a href="mailto:abagbag@gmail.com">abagbag@gmail.com</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="copy">
									<div class="row">
										<div class="col-md-12 text-center">
											<p>
												
												<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Abagbag </span> 
											</p>
										</div>
									</div>
								</div>
							</footer>
						</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

