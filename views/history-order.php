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
						<li class="active"><a href="">Order</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->


<!-- Order -->
<section class="shop checkout section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="checkout-form">
                    <h2>Order</h2>
                    <p>Order history</p>
                    <!-- Form -->
                    <form class="form" method="post" action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Order ID</th>
                                                <th class="product-name">Order Date</th>
                                                <th class="product-name">Total</th>
                                                <th class="product-name">Status</th>
                                                <th class="product-name">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($orders as $order) : ?>
                                                <tr>
                                                    <td><?php echo $order['order_id'] ?></td>
                                                    <td><?php echo $order['order_date'] ?></td>
                                                    <td><?php echo number_format($order['total_price']) ?></td>
                                                    <td><?php 
                                                    if ($order['order_status'] == 0) {
                                                        echo 'Pending';
                                                    } else if ($order['order_status'] == 1) {
                                                        echo 'Completed';
                                                    }
                                                    ?></td>
                                                    <td>
                                                        <a href="#" class="btn" data-toggle="modal" data-target="#orderDetail<?php echo $order['order_id'] ?>">Detail</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
 <?php foreach ($orders as $order) : ?>
    <div class="modal fade" id="orderDetail<?php echo $order['order_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="orderDetail<?php echo $order['order_id'] ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php $total_price = 0; ?>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-name">Price</th>
                                <th class="product-name">Quantity</th>
                                <th class="product-name">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($order['order_detail'] as $order_detail) : ?>
                                <tr>
                                    <td><?php echo $order_detail['product_name'] ?></td>
                                    <td><?php echo number_format($order_detail['price']) ?></td>
                                    <td><?php echo $order_detail['number'] ?></td>
                                    <td><?php echo number_format($order_detail['total_price']) ?></td>
                                </tr>
                                <?php $total_price += $order_detail['total_price']; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group create-account">
                                <label>Total Price: <?php echo number_format($total_price) ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'views/default/footer.php'; ?>