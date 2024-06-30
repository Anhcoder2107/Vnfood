<?php include 'views/default/header.php'; ?>	

<style>
	.image img {
		width: 750px;
		height: 364px;
	}
	.pagination{
		display: flex;
		justify-content: center;
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
								<li class="active"><a  href="">Blogs</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<!-- 750x364 -->
						 <?php foreach ($blogs as $blog) { ?>
							<div class="blog-single-main">
								<div class="row">
									<div class="col-12">
										<div class="image">
											<a href="<?php echo APPURL . 'blog?id=' . $blog['id'] ?>"><img src="views/images/blogs/<?php echo $blog['image'] ?>" alt="#"></a>
										</div>
										<div class="blog-detail">
											<a href="
											<?php echo APPURL . 'blog?id=' . $blog['id'] ?>
											"><h2 class="blog-title"><?php echo $blog['title'] ?></h2></a>
											<div class="blog-meta">
												<span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i><?php echo $blog['created_at'] ?></a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						<!-- End Blog Single -->
						<!-- pagination -->
						 
					<nav aria-label="Page navigation example" class="pagination-nav">
						<ul class="pagination justify-content-center">
							<li class="page-item">
								<a class="page-link pagination-pre" href="
								<?php 
								$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
								if ($currentPage > 1) {
									echo 'blogs?page=' . ($currentPage - 1);
								} else {
									echo 'blogs?page=1';
								}
								?>
								" aria-label="Previous">Previous</a>
							</li>
							<?php for ($i = 1; $i <= $totalPages; $i++): ?>
								<li class="page-item"><a class="page-link"
										href="blogs?page=<?php echo $i ?>"><?php echo $i ?></a></li>
							<?php endfor; ?>
							<li class="page-item">
								<a class="page-link pagination-next" href="
								<?php
								$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
								if ($currentPage < $totalPages) {
									echo 'blogs?page=' . ($currentPage + 1);
								} else {
									echo 'blogs?page=' . $totalPages;
								} 
								?>
								" aria-label="Next">Next</a>
							</li>
						</ul>
					</nav>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<?php 
								//random 3 blogs
								$blograndom = array_rand($blogs, 3);
								foreach ($blograndom as $blog) {?>
								
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="views/images/blogs/<?php echo $blogs[$blog]['image'] ?>" alt="#">
									</div>
									<div class="content">
										<h5><a href="blog?id=<?php echo $blogs[$blog]['id'] ?>"><?php echo $blogs[$blog]['title'] ?></a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar"></i><?php echo$blogs[$blog]['created_at'] ?></li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<?php }
								?>

								<!-- pagination -->
								
							</div>

							<!-- Single Widget -->
							<div class="single-widget newsletter">
								<h3 class="title">Newslatter</h3>
								<div class="letter-inner">
									<h4>Subscribe & get news <br> latest updates.</h4>
									<div class="form-inner">
										<input type="email" placeholder="Enter your email">
										<a href="#">Submit</a>
									</div>
								</div>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
			</div>
			<!-- 750x360 -->
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
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
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
										<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											<i class="ti-minus"></i>
										</button>
									</div>
									<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
									<div class="button plus">
										<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
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
<?php include 'views/default/footer.php'; ?>	