<?php
    ob_start();
    include("Header.php");

include("../Asset/Connection/connection.php");
session_start();
		
		if(isset($_POST['btnsubmit']))
		{
		$name=$_POST['txtname'];
	    $photo=$_FILES['filephoto']['name'];
		
	    $tempPhoto=$_FILES['filephoto']['tmp_name'];
		move_uploaded_file($tempPhoto,"../Asset/Files/Seller/Photo/".$photo);
		
		$details=$_POST['txtdetails'];
    $price=$_POST['txtprice'];
		$category=$_POST['selcategory'];
		
		
		$insqry="insert into tbl_product(product_name,product_photo,product_details,Cat_id,seller_id,product_price) values('".$name."','".$photo."','".$details."','".$category."','".$_SESSION['sid']."','".$price."')" ;
		
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
<title>Product Details</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="492" height="346" border="1">
    <tr>
      <td width="92">Name</td>
      <td width="157"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" placeholder="Enter Your Name" required /></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="filephoto"></label>
      <input type="file" name="filephoto" id="filephoto" required/></td>
    </tr>
    <tr>
      <td>Details</td>
      <td><label for="txtdetails"></label>
      <input type="text" name="txtdetails" id="txtdetails" placeholder="Enter the Details" required/></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><label for="txtprice"></label>
      <input type="number" name="txtprice" id="txtprice" placeholder="Enter the Price" required/></td>
    </tr>
    <tr>
      <td>Category</td>
      <td><label for="selcategory"></label>
        <select name="selcategory" id="selcategory" required>
          <option>--Select--</option>
          <?php
		   $selquery="select * from tbl_category";
		   $resultquery=$conn->query($selquery);
		   while($row=$resultquery->fetch_assoc())
		   {
			   ?>
               <option value="<?php echo $row['Cat_id'] ?>"><?php echo $row['Category_name'] ?></option>
           <?php
		   }
		   ?>
         
      </select></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />&nbsp;&nbsp;
      <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
  <br /><br />
  <table width="494" height="206" border="1">
  <tr>
  	<td align="center">SI NO</td>
    <td align="center">Name</td>
    <td align="center">Photo</td>
    <td align="center">Details</td>
    <td align="center">Price</td>
    <td align="center">Category</td>
    <td align="center">Action</td>
  </tr>
  <?php
  	$i=0;
  	$sel="select * from tbl_product p inner join tbl_category c on p.Cat_id = c.Cat_id where seller_id=".$_SESSION['sid'];
	$res=$conn->query($sel);
	while($row1=$res->fetch_assoc())
	{
		$i++;
		
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row1["product_name"] ?></td>
    <td><?php echo $row1["product_photo"] ?></td>
    <td><?php echo $row1["product_details"] ?></td>
    <td><?php echo $row1["product_price"] ?></td>
    <td><?php echo $row1["Category_name"] ?></td>
    <td><a href="stock.php?did=<?php echo $row1['product_id'] ?>">Stock</a></td>
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