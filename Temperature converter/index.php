<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>

    <?php
    // Initialize variables
    $temperature = "";
    $converted_temperature = "";
    $conversion_direction = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values from the form
        $temperature = $_POST["temperature"];
        $conversion_direction = $_POST["conversion_direction"];

        // Perform temperature conversion
        if ($conversion_direction === "c_to_f") {
            // Celsius to Fahrenheit conversion
            $converted_temperature = ($temperature * 9/5) + 32;
        } elseif ($conversion_direction === "f_to_c") {
            // Fahrenheit to Celsius conversion
            $converted_temperature = ($temperature - 32) * 5/9;
        }
    }
    ?>

    <!-- Display the form -->
    <form method="post">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required step="0.01" value="<?php echo $temperature; ?>">

        <label for="conversion_direction">Select Conversion Direction:</label>
        <select name="conversion_direction" id="conversion_direction" required>
            <option value="c_to_f" <?php if ($conversion_direction === "c_to_f") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="f_to_c" <?php if ($conversion_direction === "f_to_c") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>

        <input type="submit" value="Convert">
    </form>

    <?php
    // Display the converted temperature if it's available
    if ($converted_temperature !== "") {
        echo "<h2>Result:</h2>";
        if ($conversion_direction === "c_to_f") {
            echo "<p>{$temperature} Celsius is equal to {$converted_temperature} Fahrenheit.</p>";
        } else {
            echo "<p>{$temperature} Fahrenheit is equal to {$converted_temperature} Celsius.</p>";
        }
    }
    ?>

</body>
</html>
