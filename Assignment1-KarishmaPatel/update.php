<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Dance Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include('./reusable/nav.php');
include('./reusable/connect.php');

$id = $_GET['id'];
$query = "SELECT * FROM feel_dance WHERE `id` = '" . mysqli_real_escape_string($connect, $id) . "'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4 text-primary">Update Dance Record</h2>
    <form action="./include/update_dance.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3 row">
            <label for="Name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $row['Name']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Age" class="col-sm-3 col-form-label">Age</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="Age" name="Age" value="<?php echo $row['Age']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Gender" class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-9">
                <select class="form-control" id="Gender" name="Gender" required>
                    <option value="Male" <?php if($row['Gender'] == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if($row['Gender'] == 'Female') echo 'selected'; ?>>Female</option>
                    <option value="Other" <?php if($row['Gender'] == 'Other') echo 'selected'; ?>>Other</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Fee" class="col-sm-3 col-form-label">Fee (₹)</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="Fee" name="Fee" value="<?php echo $row['Fee']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Dance_Instructor" class="col-sm-3 col-form-label">Dance Instructor</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="Dance_Instructor" name="Dance_Instructor" value="<?php echo $row['Dance_Instructor']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Dance_Style" class="col-sm-3 col-form-label">Dance Style</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="Dance_Style" name="Dance_Style" value="<?php echo $row['Dance_Style']; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Enrollment_Date" class="col-sm-3 col-form-label">Enrollment Date</label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="Enrollment_Date" name="Enrollment_Date" value="<?php echo $row['Enrollment_Date']; ?>" required>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4" name="update_dance">Update Dance Record</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
