<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>

<body>
    <?php
    // PHP portion Starts here
    $fname = "Pavan";
    $lname = "Mistry";
    echo '<h1>Welcome to HTTP 5225 ' . $fname . ' ' . $lname . '</h1>
    <p>We will learn PHP in this class, (maybe?)</p>
    <p>Things we will learn in this class: </p>
    <ul>
    <li>PHP</li>
    <li>MYSQL</li>
    <li>LARAVEL</li>
    </ul>';

    ?>
    <?php
    echo '<img src="https://placehold.co/600x400" alt="Placeholder image">';
    //php ends here
    ?>
    <h1>Welcome to HTTP 5225 Non dynamic part</h1>
    <p>We will learn PHP in this class, (maybe?)</p>
    <p>Things we will learn in this class: </p>
    <ul>
        <li>PHP</li>
        <li>MYSQL</li>
        <li>LARAVEL</li>
    </ul>
    <img src="https://placehold.co/600x400" alt="Placeholder image">
    <?php 
        $fname = "Karishma";
        $lname = "Patel";
        // $name['fname'] = $fname;

        $name = array('fname' => $fname, 'lname' => $lname);
        $roles = array("Developer", "Dancer", "Engineer");

    ?>

    <?php 
        echo "<br>";
        echo 'Hello ' . $name['fname'] . ' ' . $name['lname']; 

        echo '<br>My role is ' . $roles[1];
    ?>
</body>

</html>