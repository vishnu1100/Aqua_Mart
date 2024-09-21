<?php
include("../Asset/Connection/connection.php");
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_GET['bid']))
{
?>

<form id="form1" name="form1" method="post" action="">
  <table width="278" border="1">
    <tr>
      <td width="28">SI NO</td>
      <td width="66">Product Name</td>
      <td width="66">Product Photo</td>
      <td width="40">Seller Name</td>
      <td width="44">Product Details</td>
    </tr>
    <?php
    $sel="select * from tbl_seller s inner join tbl_cart c inner join tbl_product  p on c.booking_id= p.booking_id and p.seller_id=s.seller_id where booking_id=".$_SESSION['bid'];
    $result=$conn->query($sel);
    $i=0;
    while ($row1 = $res->fetch_assoc()) {
        $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row1["Product_name"] ?></td>
            <td><img src="../Asset/Files/User/Photo/<?php echo $row['user_photo'] ?>"></td>
            <td><?php echo $row1["Seller_name"] ?></td>
            <td><?php echo $row1["Product_details"] ?></td>
        </tr>
        <?php
	      }
}
		?>
  </table>
</form>
</body>
</html>