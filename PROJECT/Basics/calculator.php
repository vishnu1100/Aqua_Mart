<?php
		$result="";
		$a="";
		$b="";
		if(isset($_POST["btnadd"])!=null)
		{
			$a=$_POST["txtno1"];
			$b=$_POST["txtno2"];
			$result=$a+$b;
		}
		if(isset($_POST["btnminus"])!=null)
		{
			$a=$_POST["txtno1"];
			$b=$_POST["txtno2"];
			$result=$a-$b;
		}
		
			
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calculator</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="341" border="1">
    <tr>
      <td width="68">Number 1</td>
      <td width="209"><label for="txtno1"></label>
        <input type="text" name="txtno1" id="txtno1" value="<?php echo $a ?>" /></td>
    </tr>
    <tr>
      <td>Number 2</td>
      <td><label for="txtno2"></label>
        <input type="text" name="txtno2" id="txtno2" value="<?php echo $b ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnadd" id="btnsum" value="+" />  <input type="submit" name="btnminus" id="btnminus" value="-" /></td>
    </tr>
    <tr>
      <td>Result</td>
      <td><?php echo $result ?></td>
    </tr>
  </table>
</form>
</body>
</html>