<?php
function sanitizeInput($input) {
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

// Memeriksa apakah data telah disubmit melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan input dari form
    $input = isset($_POST['input']) ? sanitizeInput($_POST['input']) : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Menampilkan input yang telah disaring
    echo "<p>Input yang telah disaring: $input</p>";

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email yang dimasukkan valid: " . sanitizeInput($email);
        } else {
            // Tangani output yang tidak valid
            echo "Email yang dimasukkan tidak valid!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output HTML Injection</title>
</head>

<body>
    <h2>Output HTML Injection</h2>

    <!-- Form untuk mengambil input dari pengguna -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Nama:</label>
        <input type="text" name="input" id="input" value="<?php echo isset($_POST['input']) ? sanitizeInput($_POST['input']) : ''; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? sanitizeInput($_POST['email']) : ''; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
