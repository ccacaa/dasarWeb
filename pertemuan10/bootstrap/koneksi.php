<<<<<<< HEAD
<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " .mysqli_connect_error());
=======
<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " .mysqli_connect_error());
>>>>>>> e22765833210c7ed994a68d514f436d60f4db267
}