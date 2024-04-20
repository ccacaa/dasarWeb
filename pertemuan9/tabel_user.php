<!--  nomor 2
<?php
// Koneksi ke MySQL Server
$koneksi = mysqli_connect("localhost", "username", "password");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi ke MySQL gagal: " . mysqli_connect_error());
}

// Query untuk membuat database jika belum ada
$query_create_database = "CREATE DATABASE IF NOT EXISTS prakwebdb";

// Eksekusi query membuat database
if (mysqli_query($koneksi, $query_create_database)) {
    echo "Database prakwebdb berhasil dibuat atau sudah ada.";
} else {
    echo "Error: " . $query_create_database . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?> -->


<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "database");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk membuat tabel user
$query_create_table = "CREATE TABLE IF NOT EXISTS user (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        username VARCHAR(50),
                        password VARCHAR(50)
                    )";

// Eksekusi query membuat tabel user
if (mysqli_query($koneksi, $query_create_table)) {
    echo "Tabel user berhasil dibuat.";
} else {
    echo "Error: " . $query_create_table . "<br>" . mysqli_error($koneksi);
}

// Query untuk insert data awal
$query_insert_data = "INSERT INTO user (id, username, password) VALUES (1, 'admin', MD5('123'))";

// Eksekusi query insert data awal
if (mysqli_query($koneksi, $query_insert_data)) {
    echo "Data awal berhasil ditambahkan.";
} else {
    echo "Error: " . $query_insert_data . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>


