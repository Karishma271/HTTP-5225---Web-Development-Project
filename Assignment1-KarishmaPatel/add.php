<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dance Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include('./reusable/nav.php'); ?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="card-title text-center mb-4 text-primary">Add New Dance Record</h2>
            <form action="./include/add_dance.php" method="POST">
                <div class="mb-3 row">
                    <label for="Name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Name" name="Name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Age" class="col-sm-3 col-form-label">Age</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="Age" name="Age" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Gender" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="Gender" name="Gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Fee" class="col-sm-3 col-form-label">Fee (₹)</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text">₹</span>
                            <input type="number" class="form-control" id="Fee" name="Fee" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Dance_Instructor" class="col-sm-3 col-form-label">Dance Instructor</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Dance_Instructor" name="Dance_Instructor" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Dance_Style" class="col-sm-3 col-form-label">Dance Style</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Dance_Style" name="Dance_Style" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Enrollment_Date" class="col-sm-3 col-form-label">Enrollment Date</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="Enrollment_Date" name="Enrollment_Date" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4" name="add">Add Dance Record</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
