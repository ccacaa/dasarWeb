<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <form id="myForm" method="POST" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" class="error" style="color: red;"></span> <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span id="email-error" class="error" style="color: red;"></span> <br> <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            var nama = $("#nama").val();
            var email = $("#email").val();
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

            if (valid) {
                (!event.preventDefault());
    // Menghentikan pengiriman form jika validasi gagal
            }
        });
    });
    </script>
</body>

</html>