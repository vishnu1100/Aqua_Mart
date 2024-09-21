<?php
    ob_start();
    include("Header.php");
		include('../Asset/Connection/connection.php');
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
</head>

<body>
<table border="1">
  <tr>
    <td align="center">SI NO</td>
    <td align="center" >Product Name</td>
    <td align="center" >Product Details</td>
    <td align="center">Product Photo</td>
    <td align="center">Category</td>
  </tr>
   <?php
  	$i=0;
  	$sel="select * from tbl_product p inner join tbl_category c on p.Cat_id=c.Cat_id where product_id=".$_GET['pid'];
	$res=$conn->query($sel);
	while($row=$res->fetch_assoc())
	{
		$i++;
		
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row["product_name"] ?></td>
    <td><?php echo $row["product_details"] ?></td>
    <td><img src="../Asset/Files/User/Photo/<?php echo $row['product_photo'] ?>" height="100" width="100"/></td>
    <td><?php echo $row["Category_name"] ?></td>
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