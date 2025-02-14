<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form action="process_math.php" method="POST">
        Number 1: <input type="number" name="input1" required><br><br>
        Number 2: <input type="number" name="input2" required><br><br>
        
        Operation: 
        <select name="operation">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>
</body>
</html>