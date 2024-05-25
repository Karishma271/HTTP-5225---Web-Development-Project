<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php
        $hour = rand(1, 24);
        echo $hour . '<br>';

        if ($hour <= 6) {
            echo "Good Morning!";
        } elseif ($hour > 6 && $hour <= 12) {
            echo "Good Afternoon!";
        } elseif ($hour > 12 && $hour <= 18) {
            echo "Good Evening!";
        } else {
            echo "Good Night!";
        }
    ?>

    <h1>Magic Number</h1>
    <?php
        $number = rand(1, 100);  
        if ($number % 3 == 0 && $number % 5 == 0) {
            echo "FizzBuzz";
        } elseif ($number % 3 == 0) {
            echo "Fizz";
        } elseif ($number % 5 == 0) {
            echo "Buzz";
        } else {
            echo "The magic number is " . $number;
        }
    ?>
</body>
</html>
