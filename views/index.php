<?php include 'default/header.php';
?>
<style>
	.product-img img {
		width: 260px;
		height: 360px;
	}

	.single-slider img {
		width: 550px;
		height: 510px;
	}

	.pagination {
		display: flex;
		justify-content: center;

	}

	.pagination-nav {
		width: 100%;
	}

	.list-image img {
		width: 154px !important;
		height: 188px !important;
	}

	.shop-single-blog img {
		width: 360px !important;
		height: 290px !important;
	}

	.single-banner img {
		width: 556px !important;
		height: 342px !important;
	}
</style>
<!-- Slider Area -->
<section class="hero-slider">
	<!-- Single Slider -->
	<div class="single-slider">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-9 offset-lg-3 col-12">
					<div class="text-inner">
						<div class="row">
							<div class="col-lg-7 col-12">
								<div class="hero-text">
									<h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
									<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it
										pereri <br> odiy maboriosm.</p>
									<div class="button">
										<a href="products" class="btn">Shop Now!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Product Area -->
<div class="product-area section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Trending Item</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-info">
					<div class="nav-main">
						<!-- Tab Nav -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<?php foreach ($categories as $key => $category): ?>
								<li class="nav-item"><a class="nav-link"
										href="<?php echo APPURL ?>products?category=<?php echo $category['category_id'] ?>"
										role="tab"><?php echo $category['category_name']; ?></a></li>
							<?php endforeach; ?>
						</ul>
						<!--/ End Tab Nav -->
					</div>
					<div class="tab-content" id="myTabContent">
						<!-- Start Single Tab -->
						<div class="tab-pane fade show active" id="man" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									<?php foreach ($products as $product): ?>
										<!-- Start Single Product -->
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img"
															src="views/images/products/<?php echo $product['thumbnail']; ?>"
															alt="#">
														<img class="hover-img"
															src="views/images/products/<?php echo $product['thumbnail']; ?>"
															alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal"
																data-target="#exampleModal<?php echo $product['product_id'] ?>"
																title="Quick View" href="#"><i
																	class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add
																	to Wishlist</span></a>
															<a title="Compare" href="#"><i
																	class="ti-bar-chart-alt"></i><span>Add to
																	Compare</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart"
																href="<?php echo APPURL . 'cart/add/' . $product['product_id']; ?>">Add
																to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a
															href="product-details.html"><?php echo $product['product_name']; ?></a>
													</h3>
													<div class="product-price">
														<span><?php echo $product['price']; ?></span>
													</div>
												</div>
											</div>
										</div>
										<!-- End Single Product -->
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<?php foreach ($products as $product): ?>
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="<?php echo $product['category_id'] ?>" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img"
															src="views/images/products/<?php echo $product['thumbnail'] ?>"
															alt="#">
														<img class="hover-img"
															src="views/images/products/<?php echo $product['thumbnail'] ?>"
															alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal"
																title="Quick View" href="#"><i
																	class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add
																	to Wishlist</span></a>
															<a title="Compare" href="#"><i
																	class="ti-bar-chart-alt"></i><span>Add to
																	Compare</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a
															href="product-details.html"><?php echo $product['product_name'] ?></a>
													</h3>
													<div class="product-price">
														<span><?php echo $product['price'] ?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Product Area -->

<!-- Start Midium Banner  -->
<section class="midium-banner mb-5">
	<div class="container">
		<div class="row">
			<!-- 556 x 342 -->
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="views/images/3674511104_da4cfeb04b_o.jpg" alt="#">
					<div class="content">
						<p></p>
						<h3>Street Food<br>Up to<span> 50%</span></h3>
						<a href="<?php echo APPURL ?>products?category=13">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="views/images/VNO-Vietnam.jpg" alt="#">
					<div class="content">
						<p></p>
						<h3>Vietnamese Food<br> up to <span>70%</span></h3>
						<a href="<?php echo APPURL ?>products?category=15" class="btn">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
		</div>
	</div>
</section>
<!-- End Midium Banner -->

<!-- Start Shop Home List  -->
<section class="shop-home-list section mt-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>On sale</h1>
						</div>
					</div>
				</div>
				<!-- Start Single List  -->
				<?php
				//random 3 products
				$randomProducts = array_rand($products, 3);
				foreach ($randomProducts as $key => $product): ?>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="views/images/products/<?php echo $products[$product]['thumbnail']; ?>"
										alt="#">
									<a href="<?php
									if (isset($_SESSION['customer'])) {
										echo 'product/cart/add?id=' . $products[$product]['product_id'];
									} else {
										echo 'login';
									}
									?>" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="product?id=<?php echo $products[$product]['product_id'] ?>"><?php echo $products[$product]['product_name']; ?></a>
									</h5>
									<p class="price with-discount"><?php echo $products[$product]['price']; ?>đ</p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>Best Seller</h1>
						</div>
					</div>
				</div>
				<?php
				//random 3 products
				$randomProducts = array_rand($products, 3);
				foreach ($randomProducts as $key => $product): ?>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="views/images/products/<?php echo $products[$product]['thumbnail']; ?>"
										alt="#">
									<a href="<?php
									if (isset($_SESSION['customer'])) {
										echo 'product/cart/add?id=' . $products[$product]['product_id'];
									} else {
										echo 'login';
									}
									?>>" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="product?id=<?php echo $products[$product]['product_id'] ?>"><?php echo $products[$product]['product_name']; ?></a>
									</h5>
									<p class="price with-discount"><?php echo $products[$product]['price']; ?>đ</p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="row">
					<div class="col-12">
						<div class="shop-section-title">
							<h1>Top viewed</h1>
						</div>
					</div>
				</div>
				<?php
				//random 3 products
				$randomProducts = array_rand($productrandom, 3);
				foreach ($randomProducts as $key => $product): ?>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="views/images/products/<?php echo $productrandom[$product]['thumbnail']; ?>"
										alt="#">
									<a href="<?php
									if (isset($_SESSION['customer'])) {
										echo 'product/cart/add?id=' . $products[$product]['product_id'];
									} else {
										echo 'login';
									}
									?>" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a
											href="product?id=<?php echo $products[$product]['product_id'] ?>"><?php echo $productrandom[$product]['product_name']; ?></a></h5>
									<p class="price with-discount"><?php echo $productrandom[$product]['price']; ?>đ</p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Home List  -->

<!-- Start Cowndown Area -->
<section class="cown-down">
	<div class="section-inner ">
		<div class="container-fluid">
			<!-- 744x586 -->
			<div class="row">
				<div class="col-lg-6 col-12 padding-right">
					<div class="image">
						<img src="views/images/fast-food-la-gi.jpg" alt="#">
					</div>
				</div>
				<div class="col-lg-6 col-12 padding-left">
					<div class="content">
						<div class="heading-block">
							<p class="small-title">Deal of day</p>
							<h3 class="title">Combo FastFood</h3>
							<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat
								lorem. Cars fermentum, sapien. </p>
							<h1 class="price">100000đ <s>200000đ</s></h1>
							<div class="coming-time">
								<div class="clearfix" data-countdown="2024/07/30"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End Cowndown Area -->

<!-- Start Shop Blog  -->
<section class="shop-blog section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>From Our Blog</h2>
				</div>
			</div>
		</div>
		<!-- 360x290 -->
		<div class="row">
			<?php foreach ($blogs as $blog): ?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="shop-single-blog">
						<img src="views/images/blogs/<?php echo $blog['image']; ?>" alt="#">
						<div class="content">
							<a class="title"
								href="<?php echo APPURL . 'blog/show/' . $blog['id']; ?>"><?php echo $blog['title']; ?></a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p>Orders over $100</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p>Within 30 days returns</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p>100% secure payment</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p>Guaranteed price</p>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Services Area -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<!-- Start Newsletter Inner -->
					<div class="inner">
						<h4>Newsletter</h4>
						<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Your email address" required="" type="email">
							<button class="btn">Subscribe</button>
						</form>
					</div>
					<!-- End Newsletter Inner -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
						aria-hidden="true"></span></button>
			</div>
			<div class="modal-body">
				<div class="row no-gutters">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<!-- Product Slider -->
						<div class="product-gallery">
							<div class="quickview-slider-active">
								<div class="single-slider">
									<img src="https://via.placeholder.com/569x528" alt="#">
								</div>
								<div class="single-slider">
									<img src="https://via.placeholder.com/569x528" alt="#">
								</div>
								<div class="single-slider">
									<img src="https://via.placeholder.com/569x528" alt="#">
								</div>
								<div class="single-slider">
									<img src="https://via.placeholder.com/569x528" alt="#">
								</div>
							</div>
						</div>
						<!-- End Product slider -->
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="quickview-content">
							<h2>Flared Shift Dress</h2>
							<div class="quickview-ratting-review">
								<div class="quickview-ratting-wrap">
									<div class="quickview-ratting">
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="yellow fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<a href="#"> (1 customer review)</a>
								</div>
								<div class="quickview-stock">
									<span><i class="fa fa-check-circle-o"></i> in stock</span>
								</div>
							</div>
							<h3>$29.00</h3>
							<div class="quickview-peragraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad
									impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo
									ipsum numquam.</p>
							</div>
							<div class="size">
								<div class="row">
									<div class="col-lg-6 col-12">
										<h5 class="title">Size</h5>
										<select>
											<option selected="selected">s</option>
											<option>m</option>
											<option>l</option>
											<option>xl</option>
										</select>
									</div>
									<div class="col-lg-6 col-12">
										<h5 class="title">Color</h5>
										<select>
											<option selected="selected">orange</option>
											<option>purple</option>
											<option>black</option>
											<option>pink</option>
										</select>
									</div>
								</div>
							</div>
							<div class="quantity">
								<!-- Input Order -->
								<div class="input-group">
									<div class="button minus">
										<button type="button" class="btn btn-primary btn-number" disabled="disabled"
											data-type="minus" data-field="quant[1]">
											<i class="ti-minus"></i>
										</button>
									</div>
									<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000"
										value="1">
									<div class="button plus">
										<button type="button" class="btn btn-primary btn-number" data-type="plus"
											data-field="quant[1]">
											<i class="ti-plus"></i>
										</button>
									</div>
								</div>
								<!--/ End Input Order -->
							</div>
							<div class="add-to-cart">
								<a href="#" class="btn">Add to cart</a>
								<a href="#" class="btn min"><i class="ti-heart"></i></a>
								<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
							</div>
							<div class="default-social">
								<h4 class="share-now">Share:</h4>
								<ul>
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal end -->

<?php foreach ($products as $product) { ?>
	<div class="modal fade" id="exampleModal<?php echo $product['product_id'] ?>" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
							aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<!-- Product Slider -->
							<div class="product-gallery">
								<div class="quickview-slider-active">
									<div class="single-slider">
										<img src="views/images/products/<?php echo $product['thumbnail'] ?>" alt="#">
									</div>
									<div class="single-slider">
										<img src="views/images/products/<?php echo $product['thumbnail'] ?>" alt="#">
									</div>
								</div>
							</div>
							<!-- End Product slider -->
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="quickview-content">
								<h2><?php echo $product['product_name'] ?></h2>
								<div class="quickview-ratting-review">
									<div class="quickview-ratting-wrap">
										<div class="quickview-ratting">
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="#"> (1 customer review)</a>
									</div>
									<div class="quickview-stock">
										<span><i class="fa fa-check-circle-o"></i> in stock</span>
									</div>
								</div>
								<h3><?php echo $product['price'] ?>đ</h3>
								<div class="quickview-peragraph">
									<p><?php echo $product['description'] ?></p>
								</div>
								<div class="quantity">
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled"
												data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000"
											value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus"
												data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>
								<div class="add-to-cart">
									<a href="
								<?php
								//
								if (isset($_SESSION['customer'])) {
									echo 'product/cart/add?id=' . $product['product_id'];
								} else {
									echo 'login';
								}
								?>
								" class="btn">Add to cart</a>
								</div>
								<div class="default-social">
									<h4 class="share-now">Share:</h4>
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>

<?php include 'default/footer.php'; ?>