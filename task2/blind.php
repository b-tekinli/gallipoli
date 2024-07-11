<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blind XSS Test Form</title>
</head>
<body>
    <h1>Blind XSS Test Form</h1>

    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        
        // Girdiyi dosyaya kaydediyoruz
        $file = fopen("submissions.txt", "a");
        fwrite($file, "Name: $name, Email: $email\n");
        fclose($file);
        
        echo "<p>Gonderildi!</p>";
    }
    ?>
</body>
</html>
