<?php
ob_start();
include('Header.php');
include("../Asset/Connection/connection.php");
session_start();
$sel = "SELECT * FROM tbl_user WHERE user_id = " . $_SESSION['uid'];
$result = $conn->query($sel);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef; /* Light grey background */
            font-family: Arial, sans-serif;
        }
        .profile-card {
            border: 1px solid #007bff; /* Blue border */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 400px;
            margin: auto;
            background-color: #ffffff; /* White background for card */
        }
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin: 20px auto;
            border: 5px solid #007bff; /* Blue border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            text-align: center;
        }
        .card-title {
            font-weight: bold;
            font-size: 1.75rem; /* Slightly larger title */
            color: #007bff; /* Blue text color */
        }
        .card-text {
            font-size: 1.2rem;
            color: #333; /* Dark gray text color */
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="profile-card card">
                <div class="card-body">
                    <img src="../Asset/Files/User/Photo/<?php echo htmlspecialchars($row['user_photo']); ?>" alt="Profile Photo" class="profile-img img-fluid">
                    <h2 class="card-title mt-3"><?php echo htmlspecialchars($row['user_name']); ?></h2>
                    <p class="card-text">
                        <b><?php echo htmlspecialchars($row['user_email']); ?></b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
include('Footer.php');
ob_flush();
?>
