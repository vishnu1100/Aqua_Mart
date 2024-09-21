<?php
ob_start();
include('Header.php');
include('../Asset/Connection/connection.php');

if (isset($_POST['btnsubmit'])) {
    $comp_title = $_POST['txttitle'];
    $comp_content = $_POST['txtcomplaint'];

    // Sanitize inputs
    $comp_title = $conn->real_escape_string($comp_title);
    $comp_content = $conn->real_escape_string($comp_content);

    $insqry = "INSERT INTO tbl_complaint (complaint_title, complaint_content) VALUES ('$comp_title', '$comp_content')";
    if ($conn->query($insqry)) {
        ?>
        <script>
            alert('Inserted Successfully');
            window.location = 'complaint.php';
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Complaint</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #ffffff;
            border-bottom: 1px solid #007bff;
            text-align: center;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: none;
            border-color: #007bff;
        }
        .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Submit Your Complaint</h3>
        </div>
        <div class="card-body">
            <form id="form1" name="form1" method="post" action="">
                <div class="form-group">
                    <label for="txttitle">Complaint Title</label>
                    <input type="text" name="txttitle" id="txttitle" class="form-control" placeholder="Enter Complaint Title" required>
                </div>
                <div class="form-group">
                    <label for="txtcomplaint">Complaint</label>
                    <textarea name="txtcomplaint" id="txtcomplaint" class="form-control" rows="5" placeholder="Enter Complaint Details" required></textarea>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary" value="Submit">
                </div>
            </form>
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
