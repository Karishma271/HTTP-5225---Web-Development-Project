<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS</title>
</head>
<body>
    <h1>All Students</h1>
    @foreach ($students as $student)
        {{ $student -> fname }} {{ $student -> lname }}
    @endforeach
</body>
</html>
