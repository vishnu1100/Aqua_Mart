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
<html>

<head>
<title>User Registration</title>
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
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            object-fit: cover;
            z-index: -1;
        }

        label{
            color:white;
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
            width: 100%;
            max-width: 500px; /* Responsive max width */
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
        input.form-control {
    color: black; /* Change to your desired color */
    background-color: rgba(255, 255, 255, 0.8); /* Optional: change background for better visibility */
}/* General styles for input fields */
input.form-control,
select.form-control {
    color: black; /* Text color */
    background-color: rgba(255, 255, 255, 0.9); /* Light background */
    border: 1px solid #ccc; /* Light border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px; /* Padding inside the input */
    transition: border-color 0.3s, box-shadow 0.3s; /* Smooth transition for focus effects */
}

input.form-control:focus,
select.form-control:focus {
    border-color: #007bff; /* Border color on focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Subtle shadow on focus */
    outline: none; /* Remove default outline */
}

/* Styles for file inputs */
input.form-control-file {
    background-color: rgba(255, 255, 255, 0.9);
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
}

/* Button styles */
.btn {
    border-radius: 5px; /* Rounded corners for buttons */
    padding: 10px 20px; /* Button padding */
}

.btn-primary {
    background-color: #007bff; /* Primary button color */
    border: none; /* Remove border */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

.btn-secondary {
    background-color: #6c757d; /* Secondary button color */
    border: none; /* Remove border */
}

.btn-secondary:hover {
    background-color: #5a6268; /* Darker shade on hover */
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
        <div class="row justify-content-center">
            <div class="col-md-8"  style="width:700px">
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
                             <a href="../index.php">   <input type="button" name="back" id="back" class="btn btn-secondary" value="Back"> </a> 
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
