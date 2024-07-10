<?php
header('Content-Type: text/html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XSS Test Cases</title>
</head>
<body>
    <h1>Protokoller ve HTML Tagleri</h1>

    <!-- img tag -->
    <?php
    echo '<h2>img tag</h2>';
    echo '<img src="javascript:alert(\'XSS!\')" />';
    echo '<img src="data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTIERldGVjdGVkIScpPC9zY3JpcHQ+" />';
    echo '<img src="vbscript:msgbox(\'XSS!\')" />';
    ?>

    <!-- a tag -->
    <?php
    echo '<h2>a tag</h2>';
    echo '<a href="javascript:alert(\'XSS!\')">Tıkla</a>';
    echo '<a href="data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTIERldGVjdGVkIScpPC9zY3JpcHQ+">Tıkla</a>';
    echo '<a href="vbscript:msgbox(\'XSS!\')">Tıkla</a>';
    ?>

    <!-- script tag -->
    <?php
    echo '<h2>script tag</h2>';
    echo '<script>location="javascript:alert(\'XSS!\')"</script>';
    echo '<script src="data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTIERldGVjdGVkIScpPC9zY3JpcHQ+"></script>';
    echo '<script src="vbscript:msgbox(\'XSS!\')"></script>';
    ?>
</body>
</html>
