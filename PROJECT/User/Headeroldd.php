<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>flatter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../Asset/Templates/Main/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/magnific-popup.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/themify-icons.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/nice-select.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/flaticon.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/animate.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/slicknav.css">
    <link rel="stylesheet" href="../Asset/Templates/Main/css/style.css">
    <style>
        /* Base styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .header-area {
            background:green;
            transition: background-color 0.3s;
            height: 120px;
        }

        .main-menu nav ul {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .main-menu nav ul li {
            margin: 0 15px;
        }

        .main-menu nav ul li a {
            color: white; /* Change to a visible color */
            text-decoration: none;
            padding: 10px 15px;
            transition: color 0.3s;
        }

        .main-menu nav ul li a:hover {
            color: #ffcc00; /* Change color on hover */
        }

        .submenu {
            display: none; /* Hide submenu by default */
            position: absolute; /* Position submenu */
            background-color: rgba(125, 125, 231, 0.9); /* Background for submenu */
            border-radius: 5px;
        }

        .submenu li {
            margin: 0;
        }

        .submenu li a {
            color: white;
            padding: 10px;
            display: block;
        }

        .main-menu nav ul li:hover .submenu {
            display: block; /* Show submenu on hover */
        }

        .logo-img img {
            height: 100px; /* Adjust logo size */
        }

        .custom_order {
            margin-top: 30px;
        }

        /* Mobile styles */
        .mobile_menu {
            display: none; /* Hide mobile menu by default */
        }

        @media (max-width: 992px) {
            .main-menu {
                display: none; /* Hide main menu on mobile */
            }

            .mobile_menu {
                display: block; /* Show mobile menu on mobile */
            }

            .logo-img-small img {
                height: 80px; /* Adjust logo size for mobile */
            }
        },
        .main-menu nav ul li a {
    color: #007bff; /* Change to your desired color */
    text-decoration: none;
    padding: 10px 15px;
    transition: color 0.3s;
}

.main-menu nav ul li a:hover {
    color: #ffcc00; /* Change hover color */
}

    </style>
    <!-- <link rel="stylesheet" href="../Asset/Templates/Main/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="mein_menu_list" id="navigation">
                                        <li style="font-color:blue" ><a href="HomePage.php">Home</a></li>  
                                        <li><a href="#">Profile <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="./Myprofile.php">My Profile</a></li>
                                                <li><a href="./Editprofile.php">Edit Profile</a></li>
                                                <li><a href="./Changepassword.php">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="MyCart.php">My Cart</a></li>
                                        <li><a href="MyBooking.php">My Booking</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                            <a href="index.html">
                                                <img src="../Asset/Templates/Main/img/logo.png" alt="">
                                            </a>
                                        </div>
                                        <li><a href="feedback.php">Feedback</a></li>
                                        <li><a href="#">Support <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="ViewComplaint.php">Complaint Reply</a></li>
                                                <li><a href="complaint.php">Complaint</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="Logout.php">LogOut</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="custom_order">
                                <a href="SearchSeller.php" class="boxed_btn_white">Search</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                            <a href="index.html">
                                <img src="../Asset/Templates/Main/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
   
    <!-- slider_area-end -->