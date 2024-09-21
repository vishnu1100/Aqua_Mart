<?php
		$largest="";
		$smallest="";
		if(isset($_POST["btnfind"])!=null)
		{
			$a=$_POST["txtno1"];
			$b=$_POST["txtno2"];
		    $c=$_POST["txtno3"];
		    if($a>$b)
			{
				if($a>$c)
				{
					$largest=$a;
					if($b>$c)
					{
						$smallest=$c;
					}
					else
					{
						$smallest=$b;
					}
				}
				else
				{
					$largest=$c;
					if($b>$a)
					{
						$smallest=$a;
					}
					else
					{
						$smallest=$b;
					}
				}
			}
			else
			{
				if($b>$c)
			    {
					$largest=$b;
					if($c>$a)
					    {
							$smallest=$a;
					    }
					else
					{
						$smallest=$c;
					}
				}
				else
				{
					$largest=$c;
					if($b>$a)
					{
						$smallest=$a;
					}
					else
					{
						$smallest=$b;
					}
				}
			}
			
		}
					
						
				    
			  
		
















?>












<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Largest & Smallest</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="323" border="1">
    <tr>
      <td width="92">Number 1</td>
      <td width="215"><label for="txtno1"></label>
      <input type="text" name="txtno1" id="txtno1" value="<?php echo $a ?>" /></td>
    </tr>
    <tr>
      <td>Number 2</td>
      <td><label for="txtno2"></label>
      <input type="text" name="txtno2" id="txtno2" value="<?php echo $b ?>" /></td>
    </tr>
    <tr>
      <td>Number 3</td>
      <td><label for="txtno3"></label>
      <input type="text" name="txtno3" id="txtno3" value="<?php echo $c ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnfind" id="btnfind" value="Submit" /></td>
    </tr>
    <tr>
      <td>Largest</td>
      <td><?php echo $largest ?></td>
    </tr>
    <tr>
      <td height="30">Smallest</td>
      <td><?php echo $smallest ?></td>
    </tr>
  </table>
</form>
</body>
</html>