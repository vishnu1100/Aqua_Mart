<?php
include("Header.php");
include("../Asset/Connection/connection.php");

$cat = "";
$eid = 0;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnsubmit'])) {
    $cat = $_POST['txtcat'];
    $eid = (int)$_POST['txteid'];

    if (empty($cat)) {
        $errors[] = 'Category name cannot be empty.';
    }

    if (empty($errors)) {
        if ($eid == 0) {
            // Insert new record
            $stmt = $conn->prepare("INSERT INTO tbl_category (Category_name) VALUES (?)");
            $stmt->bind_param("s", $cat);
        } else {
            // Update existing record
            $stmt = $conn->prepare("UPDATE tbl_category SET Category_name = ? WHERE Cat_id = ?");
            $stmt->bind_param("si", $cat, $eid);
        }

        if ($stmt->execute()) {
            echo '<script>alert("Operation Successful"); window.location="Category.php";</script>';
        } else {
            $errors[] = 'Database error: ' . $stmt->error;
        }
        $stmt->close();
    }
}

if (isset($_GET['did'])) {
    $did = (int)$_GET['did'];
    $stmt = $conn->prepare("DELETE FROM tbl_category WHERE Cat_id = ?");
    $stmt->bind_param("i", $did);

    if ($stmt->execute()) {
        echo '<script>alert("Deleted Successfully"); window.location="Category.php";</script>';
    } else {
        $errors[] = 'Database error: ' . $stmt->error;
    }
    $stmt->close();
}

if (isset($_GET['eid'])) {
    $eid = (int)$_GET['eid'];
    $stmt = $conn->prepare("SELECT * FROM tbl_category WHERE Cat_id = ?");
    $stmt->bind_param("i", $eid);
    $stmt->execute();
    $result = $stmt->get_result();
    $dataone = $result->fetch_assoc();

    if ($dataone) {
        $cat = $dataone['Category_name'];
        $eid = $dataone['Cat_id'];
    } else {
        $errors[] = 'Category not found.';
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Category Form</h4>
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
                    <label for="txtcat">Category Name</label>
                    <input type="text" class="form-control" name="txtcat" id="txtcat" value="<?php echo htmlspecialchars($cat); ?>" required/>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="btnsubmit">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0">Category List</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SI NO</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $stmt = $conn->prepare("SELECT * FROM tbl_category");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo htmlspecialchars($row['Category_name']); ?></td>
                            <td>
                                <a href="Category.php?did=<?php echo $row['Cat_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="Category.php?eid=<?php echo $row['Cat_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        <?php
                    }
                    $stmt->close();
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
