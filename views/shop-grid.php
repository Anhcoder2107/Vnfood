<?php include 'views/default/header.php'; ?>
<style>
	.product-img img {
		width: 260px;
		height: 360px;
	}

	.single-slider img {
		width: 550px;
		height: 510px;
	}
	.pagination{
		display: flex;
		justify-content: center;

	}
	.pagination-nav{
		width: 100%;
	}
</style>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="<?php echo APPURL ?>">Home<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="">Shop Grid</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-12">
				<div class="shop-sidebar">
					<!-- Single Widget -->
					<div class="single-widget category">
						<h3 class="title">Categories</h3>
						<ul class="categor-list">
							<li><a href="<?php echo APPURL ?>products">All</a></li>
							<?php foreach ($categories as $category): ?>
								<li><a
										href="<?php echo APPURL ?>products?category=<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<!--/ End Single Widget -->
					<!-- Shop By Price -->
					<div class="single-widget range">
						<h3 class="title">Shop by Price</h3>
						<div class="price-filter">
							<div class="price-filter-inner">
								<div id="slider-range"></div>
								<div class="price_slider_amount">
									<div class="label-input">
										<span>Range:</span><input type="text" id="amount" name="price"
											placeholder="Add Your Price" />
									</div>
								</div>
							</div>
						</div>
						<ul class="check-box-list">
							<li>
								<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 -
									$50<span class="count">(3)</span></label>
							</li>
							<li>
								<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 -
									$100<span class="count">(5)</span></label>
							</li>
							<li>
								<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 -
									$250<span class="count">(8)</span></label>
							</li>
						</ul>
					</div>
					<!--/ End Shop By Price -->
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-12">
				<div class="row">
					<div class="col-12">
						<!-- Shop Top -->
						<div class="shop-top">
							<div class="shop-shorter">
								<div class="single-shorter">
									<label>Show :</label>
									<select>
										<option selected="selected">09</option>
										<option>15</option>
										<option>25</option>
										<option>30</option>
									</select>
								</div>
								<div class="single-shorter">
									<label>Sort By :</label>
									<select>
										<option selected="selected">Name</option>
										<option>Price</option>
										<option>Size</option>
									</select>
								</div>
							</div>
							<ul class="view-mode">
								<li class="active"><a href="products"><i class="fa fa-th-large"></i></a></li>
							</ul>
						</div>
						<!--/ End Shop Top -->
					</div>
				</div>
				<div class="row">
					<?php foreach ($products as $product): ?>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img"
											src="views/images/products/<?php echo $product['thumbnail'] ?>" alt="#">
										<img class="hover-img"
											src="views/images/products/<?php echo $product['thumbnail'] ?>" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal"
												data-target="#exampleModal<?php echo $product['product_id'] ?> "
												title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick
													Shop</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="
													<?php
													if (isset($_SESSION['customer'])) {
														echo 'product/cart/add?id=' . $product['product_id'];
													} else {
														echo 'login';
													}
													?>
													">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a
											href="product?id=<?php echo $product['product_id'] ?>"><?php echo $product['product_name'] ?></a>
									</h3>
									<div class="product-price">
										<span><?php echo $product['price'] ?>đ</span>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					<nav aria-label="Page navigation example" class="pagination-nav">
						<ul class="pagination justify-content-center">
							<li class="page-item">
								<a class="page-link pagination-pre" href="
								<?php 
								$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
								if ($currentPage > 1) {
									echo 'products?page=' . ($currentPage - 1);
								} else {
									echo 'products?page=1';
								}
								?>
								" aria-label="Previous">Previous</a>
							</li>
							<?php for ($i = 1; $i <= $totalPages; $i++): ?>
								<li class="page-item"><a class="page-link"
										href="products?page=<?php echo $i ?>"><?php echo $i ?></a></li>
							<?php endfor; ?>
							<li class="page-item">
								<a class="page-link pagination-next" href="
								<?php
								$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
								if ($currentPage < $totalPages) {
									echo 'products?page=' . ($currentPage + 1);
								} else {
									echo 'products?page=' . $totalPages;
								} 
								?>
								" aria-label="Next">Next</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

		</div>
	</div>
</section>
<!--/ End Product Style 1  -->

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

<script>
	//pagination next and previous
	$('.pagination-next').click(function () {
		var currentPage = parseInt(getParameterByName('page'));
		var nextPage = currentPage + 1;
		window.location.href = 'products?page=' + nextPage;
	});
	$('.pagination-pre').click(function () {
		var currentPage = parseInt(getParameterByName('page'));
		var prePage = currentPage - 1;
		window.location.href = 'products?page=' + prePage;
	});

</script>

<?php include 'views/default/footer.php'; ?>