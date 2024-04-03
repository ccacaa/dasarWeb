<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" class="error" style="color: red;"></span> <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span id="email-error" class="error" style="color: red;"></span> <br> <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <span id="password-error" class="error" style="color: red;"></span> <br> <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Menghentikan pengiriman form

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            $("#hasil").html(response); // Menampilkan hasil dari proses_validasi.php di div #hasil
                        }
                    });
                }
            });
        });
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $errors = array();

        // Validasi Nama
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }

        // Validasi Email
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }

        // Validasi Password
        if (strlen($password) < 8) {
            $errors[] = "Password minimal 8 karakter.";
        }

        // Jika ada kesalahan validasi
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
            // Misalnya, menyimpan data ke database atau mengirim email
            echo "Data berhasil dikirim: Nama = $nama, Email = $email, Password = $password";
        }
    }
    ?>
</body>

</html>
