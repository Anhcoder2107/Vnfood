<?php include 'views/default/header.php'; ?>	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="<?php echo APPURL ?>">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="">Blog Single Sidebar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
			
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="image">
										<img src="
										<?php echo APPURL . 'views/images/blogs/' . $blog['image'] ?>
										" alt="#">
									</div>
									<div class="blog-detail">
										<h2 class="blog-title">
											<?php echo $blog['title'] ?>
										</h2>
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>
											<?php echo $blog['created_at'] ?>
										</a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
										</div>
										<div class="content">
											<?php
											//cut content 'n to more paragraph
											$contents = explode("\n", $blog['body']);
											foreach ($contents as $content) {
												echo "<p>$content</p>";
											}
											
											//echo $blog['content'] ?>
										</div>
									</div>
									<div class="share-social">
										<div class="row">
											<div class="col-12">
												<div class="content-tags">
													<h4>Tags:</h4>
													<ul class="tag-inner">
														<li><a href="#">Glass</a></li>
														<li><a href="#">Pant</a></li>
														<li><a href="#">t-shirt</a></li>
														<li><a href="#">swater</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
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
											<img src="<?php echo APPURL . 'views/images/blogs/' . $blogs[$blog]['image'] ?>" alt="#">
										</div>
										<div class="content">
											<h5><a href="blog?id=<?php echo $blogs[$blog]['id'] ?>"><?php echo $blogs[$blog]['title'] ?></a></h5>
											<ul class="comment">
												<li><i class="fa fa-calendar"></i><?php echo $blogs[$blog]['created_at'] ?></li>
											</ul>
										</div>
									</div>
									<!-- End Single Post -->
								<?php } ?>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
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
		<!--/ End Blog Single -->
			
		<!-- Start Footer Area -->
	
		<?php include 'views/default/footer.php'; ?>	