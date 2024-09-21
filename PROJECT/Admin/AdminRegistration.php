<?php
		include("../Asset/Connection/connection.php");
		$eid=0;
		$adminname="";
		$adminemail="";
		$adminpass="";
		if(isset($_POST['btnsubmit']))
		{
			
			$adminname=$_POST['txtname'];
			$adminemail=$_POST['txtemail'];
			$adminpass=$_POST['valpass'];
			$eid=$_POST['txteid'];
			
			
			
			
			if($eid == 0)
			{
				$adminsqry= "insert into tbl_admin(admin_name,admin_email,admin_password)values('".$adminname."','".$adminemail."','".$adminpass."')";
				if($conn->query($adminsqry))
				{
				  ?>
				  <script>
				  alert('Inserted Successfully');
				  window.location='adminregistration.php';
				  </script>
				<?php
				}
			}
			else
			{
				$upqry="update tbl_admin set admin_name='".$adminname."',admin_email='".$adminemail."',admin_password='".$adminpass."' where admin_id=".$eid;
				if($conn->query($upqry))
				{
				  ?>
				  <script>
				  alert('Updated Successfully');
				  window.location='adminregistration.php';
				  </script>
				<?php
				}

			}
			
			
	}
            
		
		if(isset($_GET['did']))
		{
			$delqry= "delete from tbl_admin where admin_id=".$_GET['did'];
			if($conn->query($delqry))
			{
			  ?>
              <script>
			  alert('Deleted Successfully');
			  window.location='adminregistration.php';
			  </script>
            <?php
			}
            
		}
		if(isset($_GET['eid']))
		{
			$selQuery= "select * from tbl_admin where admin_id=".$_GET['eid'];
			$resultone=$conn->query($selQuery);
			$dataone=$resultone->fetch_assoc();
			$adminname=$dataone['admin_name'];
			$adminemail=$dataone['admin_email'];
			$adminpass=$dataone['admin_password'];
			$eid=$dataone['admin_id'];
		}
		
		
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Registration</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="294" border="5" cellpadding="5px">
    <tr>
      <td width="78">Name</td>
      <td width="200"><label for="txtname"></label>
      <input type="hidden" name="txteid" id="txteid" value="<?php echo $eid ?>"/>
      <input type="text" name="txtname" id="txtname" value="<?php echo $adminname ?>" placeholder="Enter Your Name" required></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txtemail"></label>
      <input type="email" name="txtemail" id="txtemail" value="<?php echo $adminemail ?>" placeholder="Enter E-mail" required/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
        <label for="valpass"></label>
        <input type="password" name="valpass" id="valpass" value="<?php echo $adminpass ?>" placeholder="Enter Password" required />
     </td>
    </tr>
    <tr>
      <td height="48" colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />&nbsp;&nbsp;
      <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
  <br />
  <table border="1">
  <tr>
    <td>SI NO</td>
    <td>Name</td>
    <td>Email</td>
    <td>Password</td>
    <td colspan="2" align="center">Action</td>
  </tr>
  <?php
  $i=0;
  $selqry="select * from tbl_admin";
  $result=$conn->query($selqry);
  while($row=$result->fetch_assoc())
  {
	  $i++;
	  
  ?>
  <tr>
    <td height="39"><?php echo $i?></td>
    <td><?php echo $row['admin_name'] ?></td>
    <td><?php echo $row['admin_email']?></td>
    <td><?php echo $row['admin_password']?></td>
    <td>
    <a href="adminregistration.php?did=<?php echo $row['admin_id'] ?>">Delete</a>&nbsp;
    <a href="adminregistration.php?eid=<?php echo $row['admin_id'] ?>">Edit</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</html>