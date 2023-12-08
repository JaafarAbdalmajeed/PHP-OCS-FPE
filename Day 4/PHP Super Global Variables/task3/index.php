
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>

    <h2>Simple PHP Calculator</h2>
    
    <form method="post" action="main.php">
        <label for="n1">Number 1:</label>
        <input type="number" name="n1" >

        <label for="operation">Operation:</label>
        <select name="operation" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <label for="n2">Number 2:</label>
        <input type="number" name="n2" >

        <button type="submit">Calculate</button>
    </form>
</body>
</html>

