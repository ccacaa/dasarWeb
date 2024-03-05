<?php
$hargaProduk = 120000;
$diskon = 0.20;

if ($hargaProduk > 100000) {
    $hargaDiskon = $hargaProduk - ($hargaProduk * $diskon);
} else {
    $hargadiskon = $hargaProduk;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon : Rp " . ($hargaDiskon);
?>