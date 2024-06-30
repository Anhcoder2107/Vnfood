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
                                <h4 class="card-title">Order Detail Update</h4>
                                <p class="card-description">
                                    Update Order Detail
                                </p>
                                <form class="forms-sample" action="" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Order ID</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Order ID" name="order_id" value="<?php echo $order['order_id'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Customer Name</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer Name" name="customer_name" value="<?php echo $order['customer_name'] ?>" readonly>
                                    </div>
                                    <!-- update status -->
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                        <select class="form-control" id="exampleSelectGender" name="status">
                                            <option value="0" <?php if ($order['order_status'] == 0) {
                                                                    echo 'selected';
                                                                } ?>>Pending</option>
                                            <option value="1" <?php if ($order['order_status'] == 1) {
                                                                    echo 'selected';
                                                                } ?>>
                                                                Completed    
                                                            </option>
                                            
                                        </select>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary mr-2">Update</button>
                                
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