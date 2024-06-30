<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="views/css/owl-carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/css/bootstrap.css">

    <!-- Style -->

    <title>Register Vnfood</title>

    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #fff;
        }

        p {
            color: #b3b3b3;
            font-weight: 300;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: "Roboto", sans-serif;
        }

        a {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        a:hover {
            text-decoration: none !important;
        }

        .content {
            padding: 7rem 0;
        }

        h2 {
            font-size: 20px;
        }

        .half,
        .half .container>.row {
            height: 100vh;
            min-height: 700px;
        }

        @media (max-width: 991.98px) {
            .half .bg {
                height: 200px;
            }
        }

        .half .contents {
            background: #f6f7fc;
        }

        .half .contents,
        .half .bg {
            width: 50%;
        }

        @media (max-width: 1199.98px) {

            .half .contents,
            .half .bg {
                width: 100%;
            }
        }

        .half .contents .form-control,
        .half .bg .form-control {
            border: none;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            height: 54px;
            background: #fff;
        }

        .half .contents .form-control:active,
        .half .contents .form-control:focus,
        .half .bg .form-control:active,
        .half .bg .form-control:focus {
            outline: none;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
        }

        .half .bg {
            background-size: cover;
            background-position: center;
        }

        .half a {
            color: #888;
            text-decoration: underline;
        }

        .half .btn {
            height: 54px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .half .forgot-pass {
            position: relative;
            top: 2px;
            font-size: 14px;
        }

        .control {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            cursor: pointer;
            font-size: 14px;
        }

        .control .caption {
            position: relative;
            top: .2rem;
            color: #888;
        }

        .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .control__indicator {
            position: absolute;
            top: 2px;
            left: 0;
            height: 20px;
            width: 20px;
            background: #e6e6e6;
            border-radius: 4px;
        }

        .control--radio .control__indicator {
            border-radius: 50%;
        }

        .control:hover input~.control__indicator,
        .control input:focus~.control__indicator {
            background: #ccc;
        }

        .control input:checked~.control__indicator {
            background: #fb771a;
        }

        .control:hover input:not([disabled]):checked~.control__indicator,
        .control input:checked:focus~.control__indicator {
            background: #fb8633;
        }

        .control input:disabled~.control__indicator {
            background: #e6e6e6;
            opacity: 0.9;
            pointer-events: none;
        }


        .btn-primary {
            background: #fb771a;
            border: none;
        }

        .btn-primary:hover {
            background: #fb8633;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('views/images/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Register to <strong>Vnfood</strong></h3>
                        <!-- forloop error -->
                        <?php if(!empty($error)){
                            foreach($error as $key => $value){
                                echo '<p class="text-danger">'.$value.'</p>';
                            }
                        } ?>

                        <form action="" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control " name="customer_name" placeholder="Nguyen Van A"
                                    value="<?php echo isset($data['customer_name']) ? $data['customer_name'] : ''; ?>"
                                    id="username">
                            </div>
                            <div class="form-group first">
                                <label for="phone_number">Phone</label>
                                <input type="text" class="form-control" name="phone_number" placeholder="0123456789"
                                    value="<?php echo isset($data['phone_number']) ? $data['phone_number'] : ''; ?>"
                                    id="phone_number">
                            </div>
                            <div class="form-group first">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="123 Nguyen Van A, HD, HN"
                                    value="<?php echo isset($data['address']) ? $data['address'] : ''; ?>"
                                    id="address">
                            </div>
                            <div class="d-flex mb-3 align-items-center">
                                <label class="control control--checkbox mb-0 mr-2"><span class="caption">Male</span>
                                    <input type="radio" name="gender" value="0" checked/>
                                    <div class="control__indicator"></div>
                                </label>
                                <label class="control control--checkbox mb-0"><span class="caption">Female</span>
                                    <input type="radio" name="gender" value="1"/>
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="your-email@gmail.com"
                                    value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>"
                                    id="email">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                            </div>

                            <input type="submit" name="submit" value="Register" class="btn btn-block btn-primary">
                            <div class="d-flex mb-3 align-items-center">
                                <span class="ml-auto"><a href="login" class="forgot-pass">You already have an account</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="views/js/jquery-3.3.1.min.js"></script>
    <script src="views/js/popper.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script>
        $(function () {

            $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
            $('.collapse').on('show.bs.collapse', function () {
                $(this).closest('.accordion-item').addClass('active');
            });

            $('.collapse').on('hidden.bs.collapse', function () {
                $(this).closest('.accordion-item').removeClass('active');
            });
        });
    </script>
</body>

</html>