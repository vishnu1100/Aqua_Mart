<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign UP</title>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="390" border="5" cellpadding="5px">
    <tr>
      <td width="165">District</td>
      <td width="209"><label for="seldistrict"></label>
        <select name="seldistrict" id="seldistrict">
          <option>----Select----</option>
          <option>Kollam</option>
          <option>Kannur</option>
          <option>Ernakulam</option>
      <option name
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txtplace"></label>
      <input type="text" name="txtplace" id="txtplace" /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label for="txtage"></label>
      <input type="text" name="txtage" id="txtage" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="radio" id="rdbmale" value="rdbmale" />
        Male
          <label for="rdbmale">
            <input type="radio" name="radio" id="rdbfemale" value="rdbfemale" />
    Female</label></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><label for="txtmail"></label>
      <input type="text" name="txtmail" id="txtmail" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><span id="sprypassword1">
        <label for="valpassword"></label>
        <input type="password" name="valpassword" id="valpassword" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Confirm-Password</td>
      <td><span id="spryconfirm1">
        <label for="valconfirmpass"></label>
        <input type="password" name="valconfirmpass" id="valconfirmpass" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
    </tr>
    <tr>
      <td>Security Question</td>
      <td><label for="selsecurity"></label>
        <select name="selsecurity" id="selsecurity">
          <option>---Select---</option>
          <option>Favourite Food?</option>
          <option>Favourite color?</option>
          <option>Favourite Game?</option>
      </select></td>
    </tr>
    <tr>
      <td>Answer</td>
      <td><label for="txtanswer"></label>
      <input type="text" name="txtanswer" id="txtanswer" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "valpassword");
</script>
</body>
</html>