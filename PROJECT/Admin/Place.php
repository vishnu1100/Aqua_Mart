<?php
include("Header.php");
include('../Asset/Connection/connection.php');

$place = "";
$district = "";
$eid = 0;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnsave'])) {
    $place = $_POST['txtplace'];
    $district = $_POST['seldistrict'];
    $eid = (int)$_POST['txteid'];

    if (empty($place) || empty($district)) {
        $errors[] = 'All fields are required.';
    }

    if (empty($errors)) {
        if ($eid == 0) {
            // Insert new record
            $stmt = $conn->prepare("INSERT INTO tbl_place (place_name, district_id) VALUES (?, ?)");
            $stmt->bind_param("si", $place, $district);
        } else {
            // Update existing record
            $stmt = $conn->prepare("UPDATE tbl_place SET place_name = ?, district_id = ? WHERE place_id = ?");
            $stmt->bind_param("sii", $place, $district, $eid);
        }

        if ($stmt->execute()) {
            echo '<script>alert("Operation Successful"); window.location="Place.php";</script>';
        } else {
            $errors[] = 'Database error: ' . $stmt->error;
        }
        $stmt->close();
    }
}

if (isset($_GET['did'])) {
    $did = (int)$_GET['did'];
    $stmt = $conn->prepare("DELETE FROM tbl_place WHERE place_id = ?");
    $stmt->bind_param("i", $did);

    if ($stmt->execute()) {
        echo '<script>alert("Deleted Successfully"); window.location="Place.php";</script>';
    } else {
        $errors[] = 'Database error: ' . $stmt->error;
    }
    $stmt->close();
}

if (isset($_GET['eid'])) {
    $eid = (int)$_GET['eid'];
    $stmt = $conn->prepare("SELECT * FROM tbl_place WHERE place_id = ?");
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    $dataone = $result->fetch_assoc();

    if ($dataone) {
        $place = $dataone['place_name'];
        $district = $dataone['district_id'];
        $eid = $dataone['place_id'];
    } else {
        $errors[] = 'Place not found.';
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Place Registration</h4>
        </div>
        <div class="card-body">
            <?php
            if (!empty($errors)) {
                echo '<div class="alert alert-danger">';
                foreach ($errors as $error) {
                    echo '<p>' . htmlspecialchars($error) . '</p>';
                }
                echo '</div>';
            }
            ?>
            <form method="post" action="">
                <input type="hidden" name="txteid" value="<?php echo htmlspecialchars($eid); ?>" />
                <div class="form-group">
                    <label for="seldistrict">District</label>
                    <select name="seldistrict" id="seldistrict" class="form-control" required>
                        <option value="">--select--</option>
                        <?php
                        $stmt = $conn->prepare("SELECT * FROM tbl_district");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                            $selected = ($row['district_id'] == $district) ? 'selected' : '';
                            echo "<option value=\"{$row['district_id']}\" $selected>{$row['district_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtplace">Place</label>
                    <input type="text" class="form-control" name="txtplace" id="txtplace" value="<?php echo htmlspecialchars($place); ?>" required/>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="btnsave">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Place List</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SI NO</th>
                        <th scope="col">District</th>
                        <th scope="col">Place</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $stmt = $conn->prepare("SELECT p.place_id, p.place_name, d.district_name FROM tbl_place p INNER JOIN tbl_district d ON p.district_id = d.district_id");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo htmlspecialchars($row['district_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['place_name']); ?></td>
                            <td>
                                <a href="Place.php?did=<?php echo $row['place_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="Place.php?eid=<?php echo $row['place_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include("Footer.php");
?>
