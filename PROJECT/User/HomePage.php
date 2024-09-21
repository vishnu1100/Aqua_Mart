<?php
include("../Asset/Connection/connection.php");

session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>flatteer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="Asset/customassets/css/style.css">
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
    <link rel="stylesheet" href="../Asset/Templates/Main/css/style.css"><style>
        /* Base styles */
          /* Base styles */
          body {
            margin: 0;
           
        }

        /* Header styles */
        header {
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .header-area {
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
            color: #007bff; /* Link color */
            text-decoration: none;
            padding: 10px 15px;
            transition: color 0.3s;
        }

        .main-menu nav ul li a:hover {
            color: #ffcc00; /* Hover color */
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
        }

        /* Video styles */
        .video_area {
            position: relative;
            overflow: hidden;
            height: 60vh; /* Adjust height as needed */
        }

        .video_area video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        body {
            margin: 0;
           
        }

        /* Header styles */
        header {
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .header-area {
           
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
        }
        .video_area {
            position: relative;
            overflow: hidden;
            height: 60vh; /* Adjust height as needed */
        }

        .video_area video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Text overlay styles */
        .video_overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 10;
            
            padding: 20px;
            border-radius: 5px;
        }
    </style>
    <!-- <link rel="stylesheet" href="../Asset/Templates/Main/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="mein_menu_list" id="navigation">
                                        <li><a href="HomePage.php">Home</a></li>  
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
                                        <li><a href="SearchSeller.php" class="">Search</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="custom_order">
                                
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
  <!-- video_area-start -->
  <div class="video_area">
        <video autoplay loop muted>
            <source src="../Asset/customassets/video/bgvideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video_overlay">
        <h1 style="font-size: 80px; font-family: 'Times New Roman', Times, serif;" class="text-white mb-5 typing-effect">AQUA MART</h1>

        </div>
    </div>
    <!-- video_area-end -->
   

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Popular Orders</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                        </div>
                    </div>
                </div>
            <div class="row">
                <?php

            $sel = "select * from tbl_seller where place_id=" . $_SESSION['uplace'];
      $res = $conn->query($sel);

    while ($row = $res->fetch_assoc()) {
        ?>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="../Asset/Templates/Main/img/order/order-1.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#"><?php echo $row['seller_name']?></a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="#" class="boxed_btn">Order Now!</a>
                        </div>
                    </div>
                </div>
              <?php
              }
              ?>
                </div>
            </div>
        </div>
    </div>
    <!-- order_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area banner-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white mb-60">
                        <h3>Feedback from Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="../Asset/Templates/Main/img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="../Asset/Templates/Main/img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="../Asset/Templates/Main/img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="../Asset/Templates/Main/img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="../Asset/Templates/Main/img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="../Asset/Templates/Main/img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- brand_area-start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Brands love to take Our Services</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/02.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/03.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/04.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/05.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/06.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/7.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/12.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/9.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/10.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/11.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="../Asset/Templates/Main/img/brand/8.png" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- brand_area-end -->

    <!-- footer-start -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Top Products
                            </h3>
                            <ul>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#"> Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Quick Links
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#"> Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Features
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Resources
                            </h3>
                            <ul>
                                <li><a href="#">Guides</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Experts</a></li>
                                <li><a href="#">Agencies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Newsletter
                            </h3>
                            <p class="offer_text" >You can trust us. we only send promo offers,</p>
                            <form action="#">
                                <input type="text" placeholder="Your email address">
                                <button type="submit"> <i class="ti-arrow-right"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright">
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-4">
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-behance"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="../Asset/Templates/Main/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../Asset/Templates/Main/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../Asset/Templates/Main/js/popper.min.js"></script>
    <script src="../Asset/Templates/Main/js/bootstrap.min.js"></script>
    <script src="../Asset/Templates/Main/js/owl.carousel.min.js"></script>
    <script src="../Asset/Templates/Main/js/isotope.pkgd.min.js"></script>
    <script src="../Asset/Templates/Main/js/ajax-form.js"></script>
    <script src="../Asset/Templates/Main/js/waypoints.min.js"></script>
    <script src="../Asset/Templates/Main/js/jquery.counterup.min.js"></script>
    <script src="../Asset/Templates/Main/js/imagesloaded.pkgd.min.js"></script>
    <script src="../Asset/Templates/Main/js/scrollIt.js"></script>
    <script src="../Asset/Templates/Main/js/jquery.scrollUp.min.js"></script>
    <script src="../Asset/Templates/Main/js/wow.min.js"></script>
    <script src="../Asset/Templates/Main/js/nice-select.min.js"></script>
    <script src="../Asset/Templates/Main/js/jquery.slicknav.min.js"></script>
    <script src="../Asset/Templates/Main/js/jquery.magnific-popup.min.js"></script>
    <script src="../Asset/Templates/Main/js/plugins.js"></script>

    <!--contact js-->
    <script src="../Asset/Templates/Main/js/contact.js"></script>
    <script src="../Asset/Templates/Main/js/jquery.ajaxchimp.min.js"></script>
    <script src="../Asset/Templates/Main/js/jquery.form.js"></script>
    <script src="../Asset/Templates/Main/js/jquery.validate.min.js"></script>
    <script src="../Asset/Templates/Main/js/mail-script.js"></script>

    <script src="../Asset/Templates/Main/js/main.js"></script>

</body>

</html>