<?php
    ob_start();
    include("Header.php");

	include("../Asset/Connection/connection.php");
		
		if(isset($_POST['btnsubmit']))
		{
			$quantity=$_POST['txtstock'];
			
			
			
			
			$insqry="insert into tbl_stock(stock_quantity,product_id,stock_date) values('".$quantity."','".$_GET['did']."',curdate())" ;
			
			if($conn->query($insqry))
			{
					?>
					<script>
					alert('Inserted Successfully');
					</script>
				<?php
				}
			}
		
?>










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stock</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="425" height="173" border="1">
    <tr>
      <td align="center">Stock Quantity</td>
      <td><label for="txtstock"></label>
      <input type="number" name="txtstock" id="txtstock" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />&nbsp;&nbsp;
      <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
  <br><br>
  <table width="452" height="218" border="1">
  <tr>
    <td align="center">SI NO</td>
    <td align="center" >Product Name</td>
    <td align="center" >Stock Date</td>
    <td align="center">Stock</td>
  </tr>
   <?php
  	$i=0;
  	$sel="select * from tbl_stock s inner join tbl_product p on s.product_id = p.product_id where p.product_id=".$_GET['did'];
	$res=$conn->query($sel);
	while($row1=$res->fetch_assoc())
	{
		$i++;
		
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row1["product_name"] ?></td>
    <td><?php echo $row1["stock_date"] ?></td>
    <td><?php echo $row1["stock_quantity"] ?></td>
  </tr>
  <?php
	}
  ?>
</table>

</form>
</body>
</html>
<?php
include("Footer.php");
ob_flush();
?>