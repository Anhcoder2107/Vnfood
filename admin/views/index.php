
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
            <!-- partial:partials/_sidebar.html -->
            <?php include_once "admin/views/partials/_sidebar.php"; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i
                                        class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="views/assets/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Sales <i
                                            class="mdi mdi-chart-line mdi-24px float-end"></i>
                                    </h4>
                                    <h2 class="mb-5">$ 15,0000</h2>
                                    <h6 class="card-text">Increased by 60%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="views/assets/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Weekly Orders <i
                                            class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                                    </h4>
                                    <h2 class="mb-5">45,6334</h2>
                                    <h6 class="card-text">Decreased by 10%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="views/assets/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Visitors Online <i
                                            class="mdi mdi-diamond mdi-24px float-end"></i>
                                    </h4>
                                    <h2 class="mb-5">95,5741</h2>
                                    <h6 class="card-text">Increased by 5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Product</h4>
                                    <?php if (isset($products) && count($products) > 0): ?>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Name </th>
                                                        <th> Price </th>
                                                        <th> Category </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($products as $product): ?>
                                                        <tr>
                                                            <td> <?php echo $product['product_id'] ?> </td>
                                                            <td> <?php echo $product['product_name'] ?> </td>
                                                            <td> <?php echo $product['price'] ?> </td>
                                                            <td> <?php echo $product['category_name'] ?> </td>
                                                            <td>
                                                                <a href="<?php echo APPURL . 'admin/product/edit?id=' . $product['product_id'] ?>"
                                                                    class="btn btn-gradient-info btn-sm">Edit</a>
                                                                <a href="<?php echo APPURL . 'admin/product/delete?id=' . $product['product_id'] ?>"
                                                                    class="btn btn-gradient-danger btn-sm">Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php else: ?>
                                        <p>No product</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Project Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Due Date </th>
                                                    <th> Progress </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" style="width: 25%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td> Jul 01, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger"
                                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 3 </td>
                                                    <td> John Richards </td>
                                                    <td> Apr 12, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-warning"
                                                                role="progressbar" style="width: 90%" aria-valuenow="90"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 4 </td>
                                                    <td> Peter Meggik </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-primary"
                                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Edward </td>
                                                    <td> May 03, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger"
                                                                role="progressbar" style="width: 35%" aria-valuenow="35"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Ronald </td>
                                                    <td> Jun 05, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info"
                                                                role="progressbar" style="width: 65%" aria-valuenow="65"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-dark">Todo List</h4>
                                    <div class="add-items d-flex">
                                        <input type="text" class="form-control todo-list-input"
                                            placeholder="What do you need to do today?">
                                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                            id="add-task">Add</button>
                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Meeting with Alisa
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Call John
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Create invoice </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Print Statements
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Prepare for
                                                        presentation </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Pick up kids from
                                                        school </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <?php include_once "admin/views/partials/_footer.php"; ?>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
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