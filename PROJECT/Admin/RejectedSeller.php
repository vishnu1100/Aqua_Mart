<?php
include("../Asset/Connection/connection.php");

if (isset($_GET['aid'])) {
  $upqry = "update tbl_seller set seller_status=1 where seller_id='" . $_GET['aid'] . "'";
  if ($conn->query($upqry)) {
    ?>
    <script>
      alert("Accepted");
      window.location = "RejectedSeller.php";
    </script>
    <?php
  }
}

?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="">
    <table width="1300" height="184" border="1">
      <tr>
        <td>Sl No</td>
        <td>Name</td>
        <td>Contact</td>
        <td>Email</td>
        <td>Address</td>
        <td>Photo</td>
        <td>Proof</td>
        <td>place</td>
        <td>District</td>
        <td>Action</td>
      </tr>
      <?php
      $i = "";
      $selquery = "select * from tbl_seller s inner join tbl_place p inner join tbl_district d on s.place_id=p.place_id and p.district_id=d.district_id where seller_status = 2";
      $result = $conn->query($selquery);
      while ($row = $result->fetch_assoc()) {
        $i++;

        ?>

        <tr>
          <th scope="row"><?php echo $i ?></th>
          <td><?php echo $row['seller_name'] ?></td>

          <td><?php echo $row['seller_contact'] ?></td>
          <td><?php echo $row['seller_email'] ?></td>
          <td><?php echo $row['seller_password'] ?></td>
          <td><?php echo $row['seller_photo'] ?></td>
          <td><?php echo $row['seller_proof'] ?></td>
          <td><?php echo $row['place_name'] ?></td>
          <td><?php echo $row['district_name'] ?></td>
          <td>
            <a href="NewSeller.php?aid=<?php echo $row['seller_id'] ?>" class="btn btn-danger btn-sm">Accept</a>
          </td>
        </tr>
        <?php
      }

      ?>

    </table>
  </form>
</body>

</html>