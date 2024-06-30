<?php include 'views/default/header.php'; ?>
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
    
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="checkout-form">
                <h2>Make Your Checkout Here</h2>
                <p>Please register in order to checkout more quickly</p>
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
                                <input type="email" name="email" placeholder="" value="<?php echo $_SESSION['customer']['email'] ?>" required="required">
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
                                <label>Address Line 1<span>*</span></label>
                                <input type="text" name="address" placeholder="" required="required" value="<?php echo $_SESSION['customer']['address'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <label>Address Line 2<span>*</span></label>
                                <input type="text" name="address" placeholder="" required="required" value="<?php echo $_SESSION['customer']['address'] ?>
                                ">
                            </div>
                        </div>
                    </div>
                
                <!--/ End Form -->
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="order-details">
                <!-- Order Widget -->
                <div class="single-widget">
                    <h2>CART TOTALS</h2>
                    <div class="content">
                        <ul>
                            <li>Sub Total<span>
                                    <?php
                                    $cart = $_SESSION['cart'];
                                    $total = 0;
                                    foreach ($cart as $item) {
                                        $total += $item['price'] * $item['quantity'];
                                    }
                                    echo $total;
                                    ?>
                                đ</span></li>
                            </span></li>
                            <li>(+) Shipping<span>Free Shipping</span></li>
                            <li class="last">Total<span>
                                    <?php
                                    echo $total;
                                    ?>
                                đ
                            </span></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Order Widget -->
                <!-- Order Widget -->
                <div class="single-widget">
                    <h2>Payments</h2>
                    <div class="content">
                        <div class="radio ml-3">
                            <label class="" >
                                <input name="payment" checked value="1" type="radio"> Cash
                                On Delivery</label>
                            <label class="" >
                                <input name="payment" type="radio" value="0">
                                VnPay</label>
                        </div>
                    </div>
                </div>
                <!--/ End Order Widget -->
                <!-- Payment Method Widget -->
                <div class="single-widget payement">
                    <div class="content">
                        <img src="views/images/payment-method.png" alt="#">
                    </div>
                </div>
                <!--/ End Payment Method Widget -->
                <!-- Button Widget -->
                <div class="single-widget get-button">
                    <div class="content">
                        <div class="button">
                            <button type="submit" name="submit" class="btn">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
                <!--/ End Button Widget -->
                </form>
            </div>
        </div>
    </div>
    <div class="row">
			<div class="col-12">
				<!-- Shopping Summery -->
				<form action="cart/update" method="post">
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$subTotal = 0;
							if (isset($_SESSION['cart'])):
								$cart = $_SESSION['cart'];
								foreach ($cart as $id => $product):
									?>
									<tr>
										<td class="image" data-title="No"><img
												src="views/images/products/<?php echo $product['thumbnail']; ?>" alt="#"></td>
										<td class="product-des" data-title="Description">
											<p class="product-name"><a href="#"><?php echo $product['product_name']; ?></a></p>
											<p class="product-des">
												<?php echo $product['description']; ?>
											</p>
										</td>
										<td class="price" data-title="Price"><span><?php echo $product['price']; ?>đ</span></td>
										<td class="qty" data-title="Qty"><!-- Input Order -->
											<div class="input-group">
												<input type="text" name="quantity[<?php echo $id ?>]" class="input-number" data-min="1"
													data-max="100" value="<?php echo $product['quantity']; ?>" readonly>
											</div>
											<!--/ End Input Order -->
										</td>
										<td class="total-amount" data-title="Total">
											<span><?php echo $product['price'] * $product['quantity']; 
											$subTotal += $product['price'] * $product['quantity'];
											?>đ</span>
										</td>
									</tr>
									<?php
								endforeach;
							else:
								?>
								<tr>
									<td colspan="6" class="text-center">No product in cart</td>
								</tr>
							<?php endif;

							?>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
			</div>
    </div>
        
    </div>
</section>
<?php include 'views/default/footer.php'; ?>