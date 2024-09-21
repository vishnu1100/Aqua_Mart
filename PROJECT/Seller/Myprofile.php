<?php
    ob_start();
    include("Header.php");

		include("../Asset/Connection/connection.php");
		session_start();
		$sel="select *from tbl_seller where seller_id=".$_SESSION['sid'];
		$result=$conn->query($sel);
		$row=$result->fetch_assoc();


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Profile</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="393" height="208" border="1">
    <tr>
      <td colspan="2" align="center">
      <img src="../Asset/Files/User/Photo/<?php echo $row['seller_photo'] ?>" height="100" width="100"/>
      </td>
    </tr>
    <tr>
      <td width="136">Name</td>
      <td><?php echo $row['seller_name'] ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $row['seller_email'] ?></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Footer.php");
ob_flush();
?>