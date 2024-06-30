


<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title><?php
		if (isset($title)) {
			echo $title;
		} else {
			echo 'VnFood';
		}
	?></title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="views/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="views/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="views/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="views/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="views/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="views/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="views/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="views/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="views/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="views/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="views/css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="views/css/reset.css">
	<link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/responsive.css">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<header class="header shop">
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="<?php echo APPURL ?>"><img src="views/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form" >
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">All Category</option>
									<?php foreach ($categories as $category): ?>
										<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
									<?php endforeach; ?>
								</select>
								<form action="products" method="GET">
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                <div class="shopping-item">
                                    <!-- login, register, logout -->
                                    <?php if (isset($_SESSION['customer'])): ?>
                                        <div class="dropdown-cart-header">
											<span><?php echo $_SESSION['customer']['customer_name'] ?></span>
                                        </div>
										<ul class="bottom">
												<li>
													<a href="profile" class="btn animate">Profile</a>
												</li>
												<li>
													<a href="history-order" class="btn animate">History Order</a>
												</li>
												<li>
													<a href="logout" class="btn animate">Logout</a>
												</li>
											</ul>
                                    <?php else: ?>
                                        <ul class="bottom">
                                            <li>
										        <a href="login" class="btn animate">Login</a>
                                            </li>
                                            <li>
										        <a href="register" class="btn animate">Register</a>
                                            </li>
                                        </ul>
                                    <?php endif; ?>
								</div>
                            </div>
							<div class="sinlge-bar shopping">
								<a href="cart" class="single-icon"><i class="ti-bag"></i> <span class="total-count">
									<?php if (isset($_SESSION['cart'])): ?>
										<?php echo count($_SESSION['cart']) ?>
									<?php endif; ?>
								</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span><?php if (isset($_SESSION['cart'])): ?>
										<?php echo count($_SESSION['cart']) ?>
									<?php endif; ?> Items</span>
										<a href="cart">View Cart</a>
									</div>
									<ul class="shopping-list">
										<?php 
										$ttall = 0;
										if (isset($_SESSION['cart'])): ?>
											<?php foreach ($_SESSION['cart'] as $key => $value): ?>
												<?php $ttall +=  $value['quantity'] * $value['price'] ?>
												<li>
													<a href="<?php echo APPURL; ?>cart/delete?id=<?php echo $value['product_id']; ?>" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
													<a class="cart-img" href="#"><img src="views/images/products/<?php echo $value['thumbnail'] ?>" alt="#"></a>
													<h4><a href="#"><?php echo $value['product_name'] ?></a></h4>
													<p class="quantity"><?php echo $value['quantity'] ?>x - <span class="amount">$<?php echo $value['price'] ?></span></p>
												</li>
											<?php endforeach; ?>
										<?php endif; ?>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">
												<?php echo $ttall ?>đ
											</span>
										</div>
										<a href="checkout" class="btn animate">Checkout</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class=" col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="<?php echo APPURL ?>">Home</a></li>
													<li><a href="products">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="products">Shop Grid</a></li>
															<li><a href="cart">Cart</a></li>
														</ul>
													</li>								
													<li>
														<a href="blogs">Blog</i></a>
													</li>
													<li><a href="contact">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>