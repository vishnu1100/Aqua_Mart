<?php
    include("Header.php");
    ob_start();

		include("../Asset/Connection/connection.php");
		session_start();
		if(isset($_POST['btnsubmit']))
		{
			$currpass=$_POST['txtcurrentpass'];
			$newpass=$_POST['txtnewpass'];
			$conpass=$_POST['txtconfirmpass'];
			$sel="select seller_password from tbl_seller where seller_id=".$_SESSION['sid'];
			$result=$conn->query($sel);
			if($currpass=$result)
			{
				if($newpass=$conpass)
				{
					$upqry="update tbl_seller set seller_password='".$newpass."' where seller_id=".$_SESSION['sid'];
					$conn->query($upqry);
					?>
					<script>
				     alert('Updated Successfully');
				     window.location='Changepassword.php';
				     </script>
                     <?php
					
				}
			}
		}
?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="453" height="293" border="1">
    <tr>
      <td width="179">Current Password</td>
      <td width="258">
        <label for="txtcurrentpass"></label>
        <input type="password" name="txtcurrentpass" id="txtcurrentpass" placeholder="Enter Current Password" required/>
     </td>
    </tr>
    <tr>
      <td>New Password</td>
      <td>
        <label for="txtnewpass"></label>
        <input type="password" name="txtnewpass" id="txtnewpass" placeholder="Enter New Paasword" required />
      </td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td>
        <label for="txtconfirmpass"></label>
        <input type="password" name="txtconfirmpass" id="txtconfirmpass" placeholder="Re-type Password" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />&nbsp;&nbsp;
      <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Footer.php");
ob_flush();
?>