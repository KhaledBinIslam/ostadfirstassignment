<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    // Define the temperature variable (you can change this value)
    $temperature = 20; // Change this temperature as needed

    // Determine the weather message based on the temperature range
    if ($temperature <= 0) {
        $message = "It's freezing!";
    } elseif ($temperature > 0 && $temperature < 20) {
        $message = "It's cool.";
    } else {
        $message = "It's warm.";
    }
    ?>

    <p>The current temperature is <?php echo $temperature; ?> degrees Celsius.</p>
    <p><?php echo $message; ?></p>
</body>
</html>
