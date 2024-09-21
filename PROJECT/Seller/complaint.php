<?php
    ob_start();
    include("Header.php");

		include('../Asset/Connection/connection.php');
		if(isset($_POST['btnsubmit']))
		{
			$comp_title='';
			$comp_content='';
			$insqry="insert into tbl_complaint(complaint_title,complaint_content) values('".$comp_title."','".$comp_content."')";
			if($conn->query($insqry))
			{
				?>
                <script>
				alert('Inserted Succcessfully');
				window.location='complaint.php';
				</script>
            <?php
			}
			
		}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaint</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="454" height="196" border="1">
    <tr>
      <td width="174">Complaint Title</td>
      <td width="264"><label for="txttitle"></label>
      <input type="text" name="txttitle" id="txttitle" required/></td>
    </tr>
    <tr>
      <td>Complaint</td>
      <td><label for="txtcomplaint"></label>
      <textarea name="txtcomplaint" id="txtcomplaint" cols="45" rows="5" required></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Footer.php");
ob_flush();
?>