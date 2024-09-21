<?php
ob_start();
include('Header.php');
include('../Asset/Connection/connection.php');
session_start();

$place = "";
$district = "";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../Asset/Templates/Search/bootstrap.min.css">

<title>Search Product</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<style>
  .seller-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 20px;
  }
  .seller-card img {
    border-bottom: 1px solid #ddd;
  }
  .seller-card-body {
    padding: 15px;
  }
  .seller-card-title {
    font-size: 1.25rem;
    font-weight: 700;
  }
  .seller-card-text {
    color: #555;
  }
  .seller-card-button {
    margin-top: 10px;
  }
</style>
</head>

<body>
<div class="container mt-5">
  <h2 class="text-center">Search Product</h2>
  <form id="form1" name="form1" method="post" action="">
    <div class="form-group row">
      <label for="txtdistrict" class="col-sm-2 col-form-label">District</label>
      <div class="col-sm-10">
        <select name="txtdistrict" id="txtdistrict" class="form-control" onchange="getPlace(this.value)" required>
          <option>--select--</option>
          <?php
          $selquery = "select * from tbl_district";
          $result = $conn->query($selquery);
          while ($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row['district_id'] ?>"><?php echo $row['district_name'] ?> </option>
            <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="sel_place" class="col-sm-2 col-form-label">Place</label>
      <div class="col-sm-10">
        <select name="sel_place" id="sel_place" class="form-control" required>
          <option value="">---Select---</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12 text-center">
        <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary" />
      </div>
    </div>
  </form>

  <h3 class="text-center">Seller Information</h3>
  <div class="row">
    <?php
    $i = 0;
    if (isset($_POST['btnsubmit'])) {
      if($_POST['sel_place'] == "")
      {
        echo "place choose";
      }
      else{
        $sel = "select * from tbl_seller where place_id=" . $_POST['sel_place'];
        $res = $conn->query($sel);
      }
     
    } else {
      $sel = "select * from tbl_seller where place_id=" . $_SESSION['uplace'];
      $res = $conn->query($sel);
    }
    while ($row = $res->fetch_assoc()) {
      $i++;
      ?>
      <div class="col-md-4">
        <div class="seller-card">
          <img src="../Asset/Files/User/Seller/Photo/<?php echo $row['seller_photo'] ?>" class="card-img-top" alt="Seller Photo">
          <div class="seller-card-body">
            <h5 class="seller-card-title"><?php echo $row["seller_name"] ?></h5>
           <a href="ViewRating.php?sid=<?php echo $row['seller_id'] ?>"class="btn btn-info seller-card-button">View Rating</a>    
           
           
            <a href="ViewProduct.php?sid=<?php echo $row['seller_id'] ?>" class="btn btn-info seller-card-button">View Products</a>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</div>
<script src="../Asset/Templates/Search/jquery.min.js"></script>
        <script src="../Asset/Templates/Search/bootstrap.min.js"></script>
<script src="../Asset/Templates/Search/popper.min.js"></script>

<script src="../Asset/JQ/jQuery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
<?php
include('Footer.php');
ob_flush();
?>
