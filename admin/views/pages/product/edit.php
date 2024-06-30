<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo APPURL ?>admin/views/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>admin/views/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>admin/views/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>admin/views/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo APPURL ?>admin/views/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo APPURL ?>admin/views/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">

        <?php include_once "admin/views/partials/_navbar.php"; ?>



        <div class="container-fluid page-body-wrapper">

            <?php include_once "admin/views/partials/_sidebar.php"; ?>


            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Product</h4>
                                <?php if (isset($err)) { ?>
                                    <?php foreach ($err as $error) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $error; ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Product Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Product name" name="product_name"
                                            value="<?php echo $product['product_name'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Price</label>
                                        <input type="number" class="form-control" name="price" id="exampleInputEmail3"
                                            placeholder="Price" value="<?php echo $product['price'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Category</label>
                                        <select class="form-select" id="exampleSelectGender" name="category_id">
                                            <option value="">Select Category</option>
                                            <?php foreach ($categories as $category): ?>
                                                <option value="<?php echo $category['category_id'] ?>" <?php if ($product['category_id'] == $category['category_id']) {
                                                       echo 'selected';
                                                   } ?>>
                                                    <?php echo $category['category_name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                value="<?php echo $product['thumbnail'] ?>"
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                        <select class="form-control" id="exampleSelectGender" name="status">
                                            <option value="1" <?php if ($product['status'] == 1) {
                                                echo 'selected';
                                            } ?>>Active</option>
                                            <option value="0" <?php if ($product['status'] == 0) {
                                                echo 'selected';
                                            } ?>>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Description</label>
                                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"><?php echo $product['description'] ?>
                                        </textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                                    <a href="<?php echo APPURL ?>amdin/product"><button class="btn btn-light">Cancel</button></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                <?php include_once "admin/views/partials/_footer.php"; ?>

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo APPURL ?>admin/views/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo APPURL ?>admin/views/assets/js/off-canvas.js"></script>
    <script src="<?php echo APPURL ?>admin/views/assets/js/misc.js"></script>
    <script src="<?php echo APPURL ?>admin/views/assets/js/settings.js"></script>
    <script src="<?php echo APPURL ?>admin/views/assets/js/todolist.js"></script>
    <script src="<?php echo APPURL ?>admin/views/assets/js/jquery.cookie.js"></script>
    <script src="<?php echo APPURL ?>admin/views/assets/js/jquery-file-upload.js"></script>




    <script src="<?php echo APPURL ?>admin/views/assets/js/file-upload.js"></script>
    <script src="<?php echo APPURL ?>admin/views/assets/js/typeahead.js"></script>
    <script src="<?php echo APPURL ?>admin/views/assets/js/select2.js"></script>

    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>