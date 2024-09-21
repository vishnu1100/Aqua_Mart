<?php
include("Header.php");

		include("../Asset/Connection/connection.php");
		$district="";
	    $eid=0;
		if(isset($_POST['btnsave']))
		{
			$district=$_POST['txtname'];
			$eid=$_POST['txteid'];
			if($eid == 0)
			{
				$insqry="insert into tbl_district(district_name)values('".$district."')";
				if($conn->query($insqry))
				{
					?>
				  <script>
				  alert('Inserted Successfully');
				  window.location='District.php';
				  </script>
				<?php
				}
			}
			else
			{
				$upone="update tbl_district set district_name='".$district."' where district_id=".$eid;
				if($conn->query($upone))
				{
					?>
				  <script>
				  alert('Updated Successfully');
				  window.location='District.php';
				  </script>
				<?php
					
				}
			}
			
			
		}
		
		
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_district where district_id=".$_GET["did"];	
	if($conn->query($delqry))
		{
			?>
		  <script>
		  alert('Deleted Successfully');
		  window.location='District.php';
		  </script>
		<?php
		}
}
if(isset($_GET["eid"]))
{
	$selqryone="select * from tbl_district where district_id=".$_GET['eid'];
	$resultone=$conn->query($selqryone);
	$dataone=$resultone->fetch_assoc();
	$district=$dataone['district_name'];
	$eid=$dataone['district_id'];

}
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>
</head>

<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">District Form</h4>
        </div>
        <div class="card-body">
            <form id="form1" name="form1" method="post" action="">
                <input type="hidden" name="txteid" id="txteid" value="<?php echo $eid ?>" />
                <div class="form-group">
                    <label for="txtname">District Name</label>
                    <input type="text" class="form-control" name="txtname" id="txtname" value="<?php echo $district ?>" required/>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="btnsave" id="btnsave">Submit</button>
                    <button type="reset" class="btn btn-secondary" name="btncancel" id="btncancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">District List</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SI NO</th>
                        <th scope="col">District Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    $selqry="select * from tbl_district";
                    $result=$conn->query($selqry);
                    while($row=$result->fetch_assoc())
                    {
                        $i++;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $i?></th>
                        <td><?php echo $row['district_name'] ?></td>
                        <td>
                            <a href="District.php?did=<?php echo $row['district_id']?>" class="btn btn-danger btn-sm">Delete</a>
                            <a href="District.php?eid=<?php echo $row['district_id']?>" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
<?php
include("Footer.php");
?>