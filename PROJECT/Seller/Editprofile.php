<?php
    ob_start();
    include("Header.php");

		include("../Asset/Connection/connection.php");
?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="431" height="354" border="1">
    <tr>
      <td width="136">Email</td>
      <td width="279"><label for="txtemail"></label>
      <input type="email" name="txtemail" id="txtemail" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>
        <label for="valpass"></label>
        <input type="password" name="valpass" id="valpass" />
     </td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label for="txtname"></label>
      <input type="text" name="txtname2" id="txtname" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txtareaaddress"></label>
      <textarea name="txtareaaddress" id="txtareaaddress" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnupdate" id="btnupdate" value="Update" />&nbsp;&nbsp;
        <input type="reset" name="btncancel" id="btncancel" value="Cancel" />
<label for="btncancel"></label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Footer.php");
ob_flush();
?>