<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "style.css" ?>
    </style>
    
</head>
<body>

    <div class="container">
        <h1>OSTAD CALCULATOR</h1>

        <form method="post" action="">

        <input type="number" name="num1" placeholder="Enter the number" required><br>
        <input type="number" name="num2" placeholder="Enter the number" required><br>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="binary">Binary</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select><br>

        <button type="submit">Calculate</button>

        </form>

    <div id="result">

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch($operation){
                case "add":
                    $result = $num1 + $num2;
                    echo "<h1>Result: $result</h1>";
                    break;
                
                case "subtract":
                    $result = $num1 - $num2;
                    echo "Result: $result";
                    break;

                case "multiply":
                    $result = $num1 * $num2;
                    echo "Result: $result";
                    break;

                case "divide":
                    if($num2 != 0){
                        $result = $num1 / $num2;
                        echo "Result: $result";
                    } else {
                        echo "Can not divide by zero";
                    }
                    break;

                case "binary":
                    echo "Binary: " . decbin($num1);
                    break;
                        
                case "octal":
                    echo "Octal: " . decoct($num1);
                    break;
                case "hexadecimal":
                    echo "Hexadecimal: " . dechex($num1);
                    break;
            }
        }
        ?>

    </div>

    </div>
    
</body>
</html>
