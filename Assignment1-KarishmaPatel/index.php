<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feel Dance Academy - Dance Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">

<?php include('./reusable/nav.php'); ?>

<div class="container mt-4">
  <h2 class="text-center text-uppercase mb-4 text-primary">Dance Records</h2>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php
    include('./reusable/connect.php');
    include('./reusable/functions.php');

    $query = "SELECT fd.*, m.name AS member_name, m.age AS member_age, m.gender AS member_gender
              FROM feel_dance fd
              LEFT JOIN members m ON fd.member_id = m.member_id";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col">
                <div class="card border-0 shadow-lg rounded-3 h-100">
                  <div class="card-body">
                    <h5 class="card-title">' . $row['Name'] . '</h5>
                    <ul class="list-unstyled">
                      <li><strong>Member:</strong> ' . $row['member_name'] . '</li>
                      <li><strong>Age:</strong> ' . $row['member_age'] . '</li>
                      <li><strong>Gender:</strong> ' . $row['member_gender'] . '</li>
                      <li><strong>Fee:</strong> $' . $row['Fee'] . '</li>
                      <li><strong>Instructor:</strong> ' . $row['Dance_Instructor'] . '</li>
                      <li><strong>Style:</strong> ' . $row['Dance_Style'] . '</li>
                      <li><strong>Enrollment Date:</strong> ' . $row['Enrollment_Date'] . '</li>
                    </ul>
                    <div class="text-end">
                      <a href="update.php?id=' . $row['id'] . '" class="btn btn-sm btn-outline-primary me-2">Edit</a>
                      <a href="delete.php?id=' . $row['id'] . '" class="btn btn-sm btn-outline-danger">Delete</a>
                    </div>
                  </div>
                </div>
              </div>';
      }
    } else {
      echo '<div class="alert alert-info">No dance records found.</div>';
    }
    ?>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
