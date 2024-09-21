<?php
    include("../Asset/Connection/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View SubScribe Report</title>
    <link rel="stylesheet" href="path/to/bootstrap.css">
</head>
<body>
    <form id="form1" name="form1" method="post" action="">
      <table border="1" class="table table-bordered">
        <thead>
            <tr>
              <th>Sl No</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Address</th>
              <th>Subscription Plan</th>
              <th>Subscription Date</th>
              <th>Place</th>
              <th>District</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        // Query to fetch the subscription data
        $selquery = "SELECT * FROM tbl_subscribe s 
                     INNER JOIN tbl_seller se ON s.seller_id = se.seller_id
                     INNER JOIN tbl_place p ON se.place_id = p.place_id
                     INNER JOIN tbl_district d ON p.district_id = d.district_id";
        $result = $conn->query($selquery);
        while($row = $result->fetch_assoc()) {
        ?>
        
        <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo htmlspecialchars($row['seller_name']); ?></td>
            <td><?php echo htmlspecialchars($row['seller_contact']); ?></td>
            <td><?php echo htmlspecialchars($row['seller_email']); ?></td>
            <td><?php echo htmlspecialchars($row['seller_address']); ?></td>
            <td><?php echo htmlspecialchars($row['subscription_plan']); ?></td>
            <td><?php echo htmlspecialchars($row['subscription_date']); ?></td>
            <td><?php echo htmlspecialchars($row['place_name']); ?></td>
            <td><?php echo htmlspecialchars($row['district_name']); ?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
      </table>
    </form>
</body>
</html>
