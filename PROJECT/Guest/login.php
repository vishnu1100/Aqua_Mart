
<?php
include('../Asset/Connection/connection.php');
session_start();

if (isset($_POST['btnsubmit'])) {
    $email = $_POST['txtusrname'];
    $pass = $_POST['valpass'];

    $selSeller = "SELECT * FROM tbl_seller WHERE seller_email='" . $email . "' AND seller_password='" . $pass . "' and seller_status = 1";
    $resSeller = $conn->query($selSeller);

    $selUser = "SELECT * FROM tbl_user WHERE user_email='" . $email . "' AND user_password='" . $pass . "'";
    $resUser = $conn->query($selUser);

    $selAdmin = "SELECT * FROM tbl_admin WHERE admin_email='" . $email . "' AND admin_password='" . $pass . "'";
    $resAdmin = $conn->query($selAdmin);

    if ($dataSeller = $resSeller->fetch_assoc()) {

        // Check if subscription has expired
        $current_date = new DateTime();
        $seller_subscribe = new DateTime($dataSeller['seller_subscribe']);

        if ($seller_subscribe < $current_date) {
            // Subscription has expired
            echo "<script>alert('Your subscription has expired. Please renew your subscription.');</script>";
            ?>
            <script>
                window.location = "Subscribe.php?did=<?php echo $dataSeller['seller_id']; ?>";
            </script>
            <?php
        } else {
            $_SESSION['sid'] = $dataSeller['seller_id'];
            $_SESSION['sname'] = $dataSeller['seller_name'];
            header("Location: ../Seller/HomePage.php");
        }
    } elseif ($dataUser = $resUser->fetch_assoc()) {
        $_SESSION['uid'] = $dataUser['user_id'];
        $_SESSION['uname'] = $dataUser['user_name'];
        $_SESSION['uplace'] = $dataUser['place_id'];
        header("Location: ../User/HomePage.php");
    } elseif ($dataAdmin = $resAdmin->fetch_assoc()) {
        $_SESSION['aid'] = $dataAdmin['admin_id'];
        $_SESSION['aname'] = $dataAdmin['admin_name'];
        header("Location: ../Admin/HomePage.php");
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- Bootstrap 4 CDN -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        /* Video background */
        #video-background {
            position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
	width: 100%;
    height: 100%;
    object-fit: cover;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Numans', sans-serif;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
            border-radius: 10px;
        }

        .card-header h3 {
            color: white;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }
    </style>
</head>

<body>
    <!-- Video Background -->
    <video autoplay muted loop id="video-background">
        <source src="../Asset/customassets/video/bgvideo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Log In</h3>
                </div>
                <div class="card-body">
                    <form id="form1" name="form1" method="post" action="">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control" name="txtusrname" id="txtusrname"
                                placeholder="Enter your email" required />
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="valpass" id="valpass"
                                placeholder="Enter your password" required />
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary btn-block"
                                value="Login" /><br>
                                <a href="../index.php">   <input type="button" name="back" id="back" class="btn btn-warning btn-block" value="Back"> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
