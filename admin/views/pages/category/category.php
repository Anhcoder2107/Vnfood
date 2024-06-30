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

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Category table</h4>
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Name Category</th>
                                            <th> Description </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($categories as $category) : ?>
                                            <tr>
                                                <td> <?php echo $category['category_id'] ?> </td>
                                                <td> <?php echo $category['category_name'] ?> </td>
                                                <td> <?php echo $category['description'] ?> </td>
                                                <td>
                                                    <a href="<?php echo APPURL . 'admin/category/edit?id=' . $category['category_id'] ?>" class="btn btn-gradient-primary btn-sm">Edit</a>
                                                    <a href="<?php echo APPURL . 'admin/category/delete?id=' . $category['category_id'] ?>" class="btn btn-gradient-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>