<?php
ob_start();
include("Header.php");

include("../Asset/Connection/connection.php");
session_start();


if(isset($_GET['eid']))
{
  $rqry="update tbl_booking set booking_status = 3 where booking_id='".$_GET['eid']."'";
  if($conn->query($rqry))
  {
    ?>
    <script>
    window.location="MyBookings.php";
          </script>
          <?php
  }
}


if(isset($_GET['sid']))
{
  $rqry="update tbl_booking set booking_status = 4 where booking_id='".$_GET['sid']."'";
  if($conn->query($rqry))
  {
    ?>
    <script>
    window.location="MyBookings.php";
          </script>
          <?php
  }
}

?>





<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>
  <table width="494" height="206" border="1">
    <tr>
      <td align="center">SI NO</td>
      <td align="center">Product Name</td>
      <td align="center">Product Photo</td>
      <td align="center">Product Quantity</td>
      <td align="center">Booking date</td>
      <td align="center">Booking Time</td>
      <td align="center">Booking Amount</td>
      <td align="center">Action</td>
    </tr>
    <?php
    $i = 0;
    $sel = "select * from tbl_booking b inner join tbl_cart c on b.booking_id = c.booking_id inner join tbl_product p on c.product_id = p.product_id where p.seller_id='" . $_SESSION['sid'] . "'";
    $res = $conn->query($sel);
    while ($row1 = $res->fetch_assoc()) {
      $i++;

      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row1["product_name"] ?></td>
        <td> <img src="../Asset/Files/User/Photo/<?php echo $row['product_photo'] ?>" height="100" width="100" /></td>
        <td><?php echo $row1["cart_qty"] ?></td>
        <td><?php echo $row1["booking_date"] ?></td>
        <td><?php echo $row1["booking_time"] ?></td>
        <td><?php echo $row1["booking_amount"] ?></td>
        <td>
          <?php
          if ($row1['booking_status'] == 2) {
            echo "payment Completed";
            ?>
            <a href="MyBookings.php?eid=<?php echo $row1['booking_id']?>" >Shippied</a>

            <?php
          }
          if ($row1['booking_status'] == 3) {
            echo "Shipped";
            ?>
            <a href="MyBookings.php?sid=<?php echo $row1['booking_id']?>" >Delivered</a>

            <?php
           
          }
          if ($row1['booking_status'] == 4) {
            echo "delivered";
           
          }
          ?>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>

</body>

</html>
<?php
include("Footer.php");
ob_flush();
?>