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
    <style>
        /* gioi han the td */
        .td {
            max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

    </style>
</head>

<body>
    <div class="container-scroller">

        <?php include_once "admin/views/partials/_navbar.php"; ?>



        <div class="container-fluid page-body-wrapper">

            <?php include_once "admin/views/partials/_sidebar.php"; ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product table</h4>
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Create At</th>
                                            <th>Update At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $product) : ?>
                                            <tr>
                                                <td class="td"> <?php echo $product['product_id'] ?> </td>
                                                <td class="td"> <?php echo $product['product_name'] ?> </td>
                                                <td class="td"> <?php echo $product['price'] ?> </td>
                                                <td class="td"> <?php echo $product['description'] ?> </td>
                                                <td class="td"> <?php echo $product['category_name'] ?> </td>
                                                <td class="td"> <?php echo $product['create_at'] ?> </td>
                                                <td class="td"> <?php echo $product['update_at'] ?> </td>
                                                <td>
                                                    <a href="<?php echo APPURL ?>admin/product/edit?id=<?php echo $product['product_id'] ?>"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="<?php echo APPURL ?>admin/product/delete?id=<?php echo $product['product_id'] ?>"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
</body>

</html>