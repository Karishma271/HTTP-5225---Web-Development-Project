<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Dance Record</title>
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
    <h2>Delete Dance Record</h2>
    <div class="alert alert-danger">
        <p>Are you sure you want to delete this dance record?</p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($row['Name']); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($row['Age']); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($row['Gender']); ?></p>
        <p><strong>Fee:</strong> <?php echo htmlspecialchars($row['Fee']); ?></p>
        <p><strong>Dance Instructor:</strong> <?php echo htmlspecialchars($row['Dance_Instructor']); ?></p>
        <p><strong>Dance Style:</strong> <?php echo htmlspecialchars($row['Dance_Style']); ?></p>
        <p><strong>Enrollment Date:</strong> <?php echo htmlspecialchars($row['Enrollment_Date']); ?></p>

        <form action="./include/delete_dance.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <a href="index.php" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-danger" name="delete_dance">Delete</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
