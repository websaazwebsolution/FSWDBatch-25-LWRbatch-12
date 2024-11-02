<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
</head>
<body>
    <h2>Multiplication Table Generator</h2>
    <form action="" method="GET">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required><br><br>
        <input type="submit" value="Generate Table">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>

<h2>Multiplication Table</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the number from the GET request
    $number = isset($_GET['number']) ? (int)$_GET['number'] : 0;

    echo "<h3>Multiplication Table for $number</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Multiplier</th><th>Result</th></tr>";

    // Generate multiplication table using a for loop
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<tr><td>$number x $i</td><td>$result</td></tr>";
    }

    echo "</table>";
} else {
    echo "<p>No number provided.</p>";
}
?>

</body>
</html>