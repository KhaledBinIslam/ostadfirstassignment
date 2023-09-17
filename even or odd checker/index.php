<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>

    <?php
    // Initialize variables
    $number = "";
    $message = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input value from the form
        $number = $_POST["number"];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $message = "$number is an even number.";
        } else {
            $message = "$number is an odd number.";
        }
    }
    ?>

    <form method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required>

        <input type="submit" value="Check">
    </form>

    <?php
    // Display the result message if it's available
    if ($message !== "") {
        echo "<h2>Result:</h2>";
        echo "<p>$message</p>";
    }
    ?>

</body>
</html>
