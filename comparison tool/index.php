<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>

    <?php
    // Initialize variables
    $number1 = "";
    $number2 = "";
    $result = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values from the form
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $result = ($number1 > $number2) ? $number1 : $number2;
    }
    ?>

    <form method="post">
        <label for="number1">Enter First Number:</label>
        <input type="number" name="number1" id="number1" required>

        <label for="number2">Enter Second Number:</label>
        <input type="number" name="number2" id="number2" required>

        <input type="submit" value="Compare">
    </form>

    <?php
    // Display the result if it's available
    if ($result !== "") {
        echo "<h2>Result:</h2>";
        echo "<p>The larger number is: $result</p>";
    }
    ?>

</body>
</html>
