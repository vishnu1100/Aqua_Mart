<?php
ob_start();
include('Header.php');
include("../Asset/Connection/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff; /* White background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            color: #007bff; /* Blue color for the title */
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            color: #333;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #007bff; /* Blue border */
        }
        .form-control:focus {
            border-color: #0056b3; /* Darker blue on focus */
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25); /* Blue shadow on focus */
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>

<div class="container form-container">
    <h2>Edit Profile</h2>
    <form id="form1" name="form1" method="post" action="">
        <div class="form-group">
            <label for="txtemail">Email</label>
            <input type="email" name="txtemail" id="txtemail" class="form-control" placeholder="Enter E-mail" required/>
        </div>
        <div class="form-group">
            <label for="valpass">Password</label>
            <input type="password" name="valpass" id="valpass" class="form-control" placeholder="Enter Password" required/>
        </div>
        <div class="form-group">
            <label for="txtname">Name</label>
            <input type="text" name="txtname" id="txtname" class="form-control" placeholder="Enter Your Name" required/>
        </div>
        <div class="form-group">
            <label for="txtareaaddress">Address</label>
            <textarea name="txtareaaddress" id="txtareaaddress" class="form-control" rows="5" placeholder="Enter Address" required></textarea>
        </div>
        <div class="form-group text-center">
            <input type="submit" name="btnupdate" id="btnupdate" class="btn btn-primary" value="Update" />
            <input type="reset" name="btncancel" id="btncancel" class="btn btn-secondary ml-2" value="Cancel" />
        </div>
    </form>
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
