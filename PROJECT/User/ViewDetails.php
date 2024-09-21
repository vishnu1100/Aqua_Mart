<?php
include("../Asset/Connection/connection.php");
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
if(isset($_GET['bid']))
{
?>

<div class="container mt-5">
  <h2 class="mb-4">Booking Details</h2>
  <form id="form1" name="form1" method="post" action="">
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">SI NO</th>
          <th scope="col">Product Name</th>
          <th scope="col">Product Photo</th>
          <th scope="col">Seller Name</th>
          <th scope="col">Product Details</th>
          <th scope="col">Action</th>
          
          
          
        </tr>
      </thead>
      <tbody>
        <?php
        $sel = "select * from tbl_booking inner join tbl_seller s inner join tbl_cart c inner join tbl_product p on c.product_id= p.product_id and p.seller_id=s.seller_id where c.booking_id=".$_GET['bid'];
        $result = $conn->query($sel);
        $i = 0;

        while ($row1 = $result->fetch_assoc()) {
          $status = $row1['booking_status'];
         
          $i++;
          ?>
          <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $row1["product_name"] ?></td>
            <td><img src="../Asset/Files/Seller/Photo/<?php echo $row1['product_photo'] ?>" class="img-fluid" style="max-width: 100px;"></td>
            <td><?php echo $row1["seller_name"] ?></td>
            <td><?php echo $row1["product_details"] ?></td>
            <?php
            if($status==4)
            {
            ?> 
            <td>
              <a href="SellerRating.php?pid=<?php echo $row1["seller_id"]; ?>" class="btn btn-primary btn-sm">Rate Seller</a>
            </td>
            <?php
            }
            else{
              echo "Not Delivered yet";
            }
            ?>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </form>
</div>

<?php
}
?>
<!-- Bootstrap JS and dependencies (Optional but useful for interactive components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
