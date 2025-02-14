<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input1 = $_POST["input1"];
        $input2 = $_POST["input2"];
        $operation = $_POST["operation"];
        
        // Execute Python script
        $command = "python3 math_operations.py $input1 $input2 $operation";
        $result = shell_exec($command);
        
        if ($result !== null) {
            echo "<h2>Result: $result</h2>";
        } else {
            echo "<h2>Calculation Error</h2>";
        }
    }
    ?>
    <br>
    <a href="math_form.php">Back to calculator</a>
</body>
</html>