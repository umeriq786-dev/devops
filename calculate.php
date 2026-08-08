<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
</head>

<body>

<h2>Calculation Result</h2>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

switch ($operation) {

    case "add":
        $result = $num1 + $num2;
        break;

    case "subtract":
        $result = $num1 - $num2;
        break;

    case "multiply":
        $result = $num1 * $num2;
        break;

    case "divide":

        if ($num2 == 0) {
            $result = "Cannot divide by zero";
        } else {
            $result = $num1 / $num2;
        }

        break;

    default:
        $result = "Invalid operation";
}

echo "<h3>Result: " . $result . "</h3>";

?>

<br>

<a href="index.html">Go Back</a>

</body>
</html>
