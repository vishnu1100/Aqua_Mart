<?php
ob_start();
include('Header.php');

include("../Asset/Connection/connection.php");
session_start();

// Ensure user is logged in
if (!isset($_SESSION['uid'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

$userId = $_SESSION['uid'];

// Prepare and execute the query using prepared statements
$stmt = $conn->prepare("SELECT * FROM tbl_booking WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 30px;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .table thead th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Booking History</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SI NO</th>
                    <th>Booking Date</th>
                    <th>Booking Time</th>
                    <th>Booking Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $i++;
                    $status = $row['booking_status'];
                    $bookingId = htmlspecialchars($row["booking_id"]);
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($i); ?></td>
                        <td><?php echo htmlspecialchars($row["booking_date"]); ?></td>
                        <td><?php echo htmlspecialchars($row["booking_time"]); ?></td>
                        <td><?php echo htmlspecialchars($row["booking_amount"]); ?></td>
                        <td>
                            <?php
                            switch ($status) {
                                case 1:
                                    echo "Payment Not Completed";
                                    ?>
                                    <a href="Payment.php?bid=<?php echo $bookingId; ?>" class="btn btn-primary btn-sm">Payment</a>
                                    <a href="ViewDetails.php?bid=<?php echo $bookingId; ?>" class="btn btn-info btn-sm">View More</a>
                                    <?php
                                    break;
                                case 2:
                                    echo "Payment Completed";
                                    ?>
                                    <a href="ViewDetails.php?bid=<?php echo $bookingId; ?>" class="btn btn-info btn-sm">View More</a>
                                    <?php
                                    break;
                                case 3:
                                    echo "Shipped";
                                    ?>
                                    <a href="ViewDetails.php?bid=<?php echo $bookingId; ?>" class="btn btn-info btn-sm">View More</a>
                                    <?php
                                    break;
                                case 4:
                                    echo "Delivered";
                                    ?>
                                    <a href="ViewDetails.php?bid=<?php echo $bookingId; ?>" class="btn btn-info btn-sm">View More</a>
                                    <?php
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php
include('Footer.php');
ob_flush();
?>
