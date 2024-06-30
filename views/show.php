<?php include 'views/default/header.php'; ?>

<style>
    .image img {
        width: 555px;
        height: 310px;
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
                        <li class="active"><a href="">Product Single </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Blog Single -->
<section class="single-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-main">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="image">
                                <img src="views/images/products/<?php echo $product['thumbnail']; ?>" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="content">
                                <h2 class="product-title mb-5"><?php echo $product['product_name']; ?></h2>
                                <div class="product-price mb-5">
                                    <span>Price: <?php echo $product['price']; ?>đ</span>
                                </div>
                                <p class="mb-5">Description: <?php echo $product['description']; ?></p>
                                <!-- input quantity -->
                                <div class="product-select mb-5">
                                    <label>Quantity:</label>
                                    <input type="number" value="1" min="1" max="100">
                                </div>
                                <div class="product-select mt-5" >
                                    <a href="
                                    <?php echo APPURL . 'cart/add?id=' . $product['product_id'] ?>
                                    "><button class="btn">Add to cart</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!--/ End Blog Single -->

<!-- Start Footer Area -->

<?php include 'views/default/footer.php'; ?>