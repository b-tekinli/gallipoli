<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Polyglot XSS Test Cases</title>
</head>
<body>
    <h1>Polyglot Kullanarak XSS Zafiyeti</h1>
    <form method="GET">
        <label for="input">Enter input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET['input'])) {
        $input = $_GET['input'];
        
        // Reflection 1: HTML Attribute
        echo "<h2>Reflection 1: HTML Attribute</h2>";
        echo "<img src='$input'>";

        // Reflection 2: JavaScript
        echo "<h2>Reflection 2: JavaScript</h2>";
        echo "<script>var x = '$input';</script>";

        // Reflection 3: CSS
        echo "<h2>Reflection 3: CSS</h2>";
        echo "<style>body { background-image: url('$input'); }</style>";

        // Reflection 4: HTML Element
        echo "<h2>Reflection 4: HTML Element</h2>";
        echo "<div>$input</div>";

        // Reflection 5: URL Parameter
        echo "<h2>Reflection 5: URL Parameter</h2>";
        echo "<a href='test.php?param=$input'>Tıkla</a>";
    }
    ?>
</body>
</html>
