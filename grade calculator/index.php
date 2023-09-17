<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>

    <?php
    // Define the test scores
    $score1 = 85;
    $score2 = 72;
    $score3 = 95;

    // Calculate the average
    $average = ($score1 + $score2 + $score3) / 3;

    // Determine the corresponding letter grade
    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    ?>

    <h2>Test Scores:</h2>
    <ul>
        <li>Test 1: <?php echo $score1; ?></li>
        <li>Test 2: <?php echo $score2; ?></li>
        <li>Test 3: <?php echo $score3; ?></li>
    </ul>

    <h2>Average Score:</h2>
    <p><?php echo $average; ?></p>

    <h2>Letter Grade:</h2>
    <p><?php echo $grade; ?></p>
</body>
</html>
