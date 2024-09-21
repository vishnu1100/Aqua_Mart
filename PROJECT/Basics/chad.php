<?php
		include("../Asset/Connection/connection.php");
		if(isset($_POST['btnsubmit']))
		{
			$cat="";
			$name=$_POST['txtname'];
			$insqry="insert into tbl_name(Name) values('".$name."')";
			if($conn->query($insqry))
			{
				?>
              <script>
			  alert('Inserted Successfully');
			  window.location='chad.php';
			  </script>
            <?php
			}
			
			
		}
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Name</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="441" height="182" border="1">
    <tr>
      <td width="174">Name</td>
      <td width="251"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />&nbsp;&nbsp;
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>