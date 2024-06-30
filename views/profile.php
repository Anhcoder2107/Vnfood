<?php include 'views/default/header.php'; ?>
>




<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="<?php echo APPURL ?>">Home<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="">Profile</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->


<!-- Profile -->

<section class="shop checkout section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Profile</h2>
                    <p>Update your profile</p>
                    <!-- Form -->
                    <form class="form" method="post" action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Name<span>*</span></label>
                                    <input type="text" name="name" placeholder="" required="required" value="<?php echo $_SESSION['customer']['customer_name'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email Address<span>*</span></label>
                                    <input readonly type="email" name="email" placeholder="" value="<?php echo $_SESSION['customer']['email'] ?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Phone Number<span>*</span></label>
                                    <input type="number" name="phone" placeholder=""
                                        value="<?php echo $_SESSION['customer']['phone_number'] ?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Address<span>*</span></label>
                                    <input type="text" name="address" placeholder="" required="required" value="<?php echo $_SESSION['customer']['address'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group create-account">
                                <button type="submit" name="submit" class="btn">Update</button>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'views/default/footer.php'; ?>