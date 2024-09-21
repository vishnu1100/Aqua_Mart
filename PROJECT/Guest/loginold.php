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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://source.unsplash.com/1600x900/?nature,water');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 20px;
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            border-radius: 25px;
            padding: 10px 20px;
        }

        .form-control {
            border-radius: 25px;
            padding: 10px 15px;
        }

        .card-footer {
            text-align: center;
        }

        .card-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Welcome Back!</h3>
                    </div>
                    <div class="card-body">
                        <form id="form1" name="form1" method="post" action="">
                            <div class="form-group">
                                <label for="txtusrname">E-mail</label>
                                <input type="email" class="form-control" name="txtusrname" id="txtusrname"
                                    placeholder="Enter your email" required />
                            </div>
                            <div class="form-group">
                                <label for="valpass">Password</label>
                                <input type="password" class="form-control" name="valpass" id="valpass"
                                    placeholder="Enter your password" required />
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary btn-block"
                                    value="Login" />
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="btncancel" id="btncancel" class="btn btn-secondary btn-block"
                                    value="Cancel" />
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Don't have an account? <a href="Newuser.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>