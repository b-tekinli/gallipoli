<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noscript XSS Test Cases</title>
</head>
<body>
    <h1>Noscript XSS Test Cases</h1>
    <form method="GET">
        <label for="input">Enter input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET['input'])) {
        $input = $_GET['input'];

        // 1: <noscript> Tag
        echo "<h2>1: <noscript> Tag</h2>";
        echo "<noscript>$input</noscript>";

        // 2: <link> Tag
        echo "<h2>2: <link> Tag</h2>";
        echo "<link rel='stylesheet' href='$input'>";

        // 3: <iframe> Tag
        echo "<h2>3: <iframe> Tag</h2>";
        echo "<iframe src='$input'></iframe>";
    }
    ?>
</body>
</html>
