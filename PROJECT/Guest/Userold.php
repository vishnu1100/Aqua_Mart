<?php
include("../Asset/Connection/connection.php");

if (isset($_POST['btnsubmit'])) {
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $pass = $_POST['valpass'];
    $place = $_POST['sel_place'];
    $photo = $_FILES['filephoto']['name'];
    $tempPhoto = $_FILES['filephoto']['tmp_name'];
    move_uploaded_file($tempPhoto, "../Asset/Files/User/Photo/" . $photo);
    $address = $_POST['txtareaaddress'];

    $insqry = "INSERT INTO tbl_user(user_name, user_email, user_password, user_photo, user_address, place_id) VALUES('$name', '$email', '$pass', '$photo', '$address', '$place')";

    if ($conn->query($insqry)) {
        echo "<script>alert('Inserted Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://source.unsplash.com/1600x900/?city');
            background-size: cover;
            background-position: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            margin-top: 200px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
            text-align: center;
            padding: 20px;
        }

        .form-control, .btn-primary {
            border-radius: 25px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            width: 100%;
            border-radius: 25px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>User Registration</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                            <div class="form-group">
                                <label for="txtname">Name</label>
                                <input type="text" class="form-control" name="txtname" id="txtname" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="txtemail">Email</label>
                                <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="Enter E-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="valpass">Password</label>
                                <input type="password" class="form-control" name="valpass" id="valpass" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <label for="filephoto">Photo</label>
                                <input type="file" class="form-control-file" name="filephoto" id="filephoto" required>
                            </div>
                            <div class="form-group">
                                <label for="txtdistrict">District</label>
                                <select name="txtdistrict" id="txtdistrict" class="form-control" onChange="getPlace(this.value)" required>
                                    <option value="">---Select---</option>
                                    <?php
                                    $sel = "SELECT * FROM tbl_district";
                                    $result = $conn->query($sel);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['district_id'] . "'>" . $row['district_name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel_place">Place</label>
                                <select name="sel_place" id="sel_place" class="form-control" required>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtareaaddress">Address</label>
                                <textarea name="txtareaaddress" id="txtareaaddress" cols="30" rows="4" class="form-control" placeholder="Enter Your Address" required></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary" value="Submit">
                            </div>
                            <div class="form-group text-center">
                                <input type="reset" name="btncancel" id="btncancel" class="btn btn-secondary" value="Cancel">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="../Asset/JQ/jQuery.js"></script>

    <script>
        function getPlace(did) {
            $.ajax({
                url: "../Asset/AjaxPages/AjaxPlace.php?did=" + did,
                success: function (result) {
                    $("#sel_place").html(result);
                }
            });
        }
    </script>
</body>

</html>
