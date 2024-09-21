<?php
    include("../Asset/Connection/connection.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png"  href="../Asset/Templates/Admin/assets/images/logos/favicon.png" />
  <link rel="stylesheet"  href="../Asset/Templates/Admin/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../Asset/Templates/Admin/assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Homepage.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="District.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">District</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="place.php" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Place</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Category.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Viewsellercomplaint.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">View Seller Complaint</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Viewusercomplaint.php" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">View User Complaint</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Newseller.php" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Seller Verification</span>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="AcceptedSeller.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Accepted Sellers</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ViewSubScribeReport.php" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Subscriptions</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="RejectedSeller.php" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Rejected Sellers</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../Asset/Templates/Admin/assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
             
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../Asset/Templates/Admin/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
     

    <form id="form1" name="form1" method="post" action="">
      <table border="1" class="table table-bordered">
        <thead>
            <tr>
              <th>Sl No</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Subscription Plan</th>
              <th>Subscription Date</th>
              <th>Place</th>
              <th>District</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        // Query to fetch the subscription data
        $selquery = "SELECT * FROM tbl_subscribe s 
                     INNER JOIN tbl_seller se ON s.seller_id = se.seller_id
                     INNER JOIN tbl_place p ON se.place_id = p.place_id
                     INNER JOIN tbl_district d ON p.district_id = d.district_id";
        $result = $conn->query($selquery);
        while($row = $result->fetch_assoc()) {
        ?>
        
        <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo htmlspecialchars($row['seller_name']); ?></td>
            <td><?php echo htmlspecialchars($row['seller_contact']); ?></td>
            <td><?php echo htmlspecialchars($row['seller_email']); ?></td>
            <td><?php echo htmlspecialchars($row['subscribe_amount']); ?></td>
            <td><?php echo htmlspecialchars($row['subscribe_date']); ?></td>
            <td><?php echo htmlspecialchars($row['place_name']); ?></td>
            <td><?php echo htmlspecialchars($row['district_name']); ?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
      </table>
 

        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="../Asset/Templates/Admin/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../Asset/Templates/Admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../Asset/Templates/Admin/assets/js/sidebarmenu.js"></script>
  <script src="../Asset/Templates/Admin/assets/js/app.min.js"></script>
  <script src="../Asset/Templates/Admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../Asset/Templates/Admin/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../Asset/Templates/Admin/assets/js/dashboard.js"></script>
</body>

</html>